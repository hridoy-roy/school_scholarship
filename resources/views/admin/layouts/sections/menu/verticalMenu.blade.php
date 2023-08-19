<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

    <!-- ! Hide app brand if navbar-full -->

    <div class="app-brand demo">
        <a href="{{url('/')}}" class="app-brand-link">
            <span class="app-brand-logo demo">
                @include('admin._partials.macros',["height"=>20])
            </span>
            <span class="app-brand-text demo menu-text fw-bold">{{config('variables.templateName')}}</span>
        </a>

        <a href="{{ route('admin.dashboard') }}" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
            <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
        </a>
    </div>


    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <li class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }} menu-item">
            <a href="{{ route('admin.dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Dashboards">Dashboards</div>
            </a>
        </li>
        @if (auth()->user()->is_admin == 1)

        <li
            class="{{ request()->routeIs('institute.index') || request()->routeIs('institute.create') || request()->routeIs('institute.edit') ? 'active open' : '' }} menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon ti ti-school"></i>
                <div data-i18n="Dashboards">School</div>
                <div class="badge bg-label-primary rounded-pill ms-auto">2</div>
            </a>
            <ul class="menu-sub">
                <li class="{{ request()->routeIs('institute.index') ? 'active' : '' }} menu-item">
                    <a href="{{ route('institute.index') }}" class="menu-link">
                        <div>List</div>
                    </a>
                </li>
                <li class="{{ request()->routeIs('institute.create') ? 'active' : '' }} menu-item">
                    <a href="{{ route('institute.create') }}" class="menu-link">
                        <div>Create</div>
                    </a>
                </li>
            </ul>
        </li>

        <li
            class="{{ request()->routeIs('gallery.create') || request()->routeIs('gallery.list') || request()->routeIs('gallery.edit') ? 'active open' : '' }} menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon ti ti-server"></i>
                <div data-i18n="Dashboards">Class</div>
                <div class="badge bg-label-primary rounded-pill ms-auto">2</div>
            </a>
            <ul class="menu-sub">

                <li class="{{ request()->routeIs('gallery.create') ? 'active' : '' }} menu-item">
                    <a href="{{ route('classes.create') }}" class="menu-link">
                        <div>Create</div>
                    </a>
                </li>

                <li class="{{ request()->routeIs('gallery.list') ? 'active' : '' }} menu-item">
                    <a href="{{ route('classes.index') }}" class="menu-link">
                        <div>List</div>
                    </a>
                </li>
            </ul>
        </li>


        <li
            class="{{ request()->routeIs('examcenter.index') || request()->routeIs('examcenter.create') || request()->routeIs('examcenter.edit') ? 'active open' : '' }} menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon ti ti-clipboard"></i>
                <div data-i18n="Dashboards">Exam Center</div>
                <div class="badge bg-label-primary rounded-pill ms-auto">2</div>
            </a>
            <ul class="menu-sub">

                <li class="{{ request()->routeIs('examcenter.index') ? 'active' : '' }} menu-item">
                    <a href="{{ route('examcenter.create') }}" class="menu-link">
                        <div>Create</div>
                    </a>
                </li>

                <li class="{{ request()->routeIs('gallery.list') ? 'active' : '' }} menu-item">
                    <a href="{{ route('examcenter.index') }}" class="menu-link">
                        <div>List</div>
                    </a>
                </li>

            </ul>
        </li>
        <li class="{{ request()->routeIs('students.index') ? 'active open' : '' }} menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon ti ti-smart-home"></i>
                <div data-i18n="Dashboards">Registration</div>
                <div class="badge bg-label-primary rounded-pill ms-auto">1</div>
            </a>
            <ul class="menu-sub">

                <li class="{{ request()->routeIs('students.index') ? 'active' : '' }} menu-item">
                    <a href="{{ route('students.index') }}" class="menu-link">
                        <div>List</div>
                    </a>
                </li>
            </ul>
        </li>
        <li
            class="{{ request()->routeIs('blogs.index') || request()->routeIs('blogs.create') || request()->routeIs('blogs.edit') || request()->routeIs('blogs.show') ? 'active open' : '' }} menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Dashboards">Blogs</div>
                <div class="badge bg-label-primary rounded-pill ms-auto">2</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('blogs.index') }}"
                        class="{{ request()->routeIs('blogs.index') ? 'active' : '' }} menu-link">
                        <div>List</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('blogs.create') }}"
                        class="{{ request()->routeIs('blogs.create') ? 'active' : '' }} menu-link">
                        <div>Create</div>
                    </a>
                </li>
            </ul>
        </li>
        <li
            class="{{ request()->routeIs('student.pay.view') || request()->routeIs('student.paid.view') || request()->routeIs('student.unpaid.view')  ? 'active open' : '' }} menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Dashboards">Student pay</div>
                <div class="badge bg-label-primary rounded-pill ms-auto">2</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('student.pay.view') }}"
                        class="{{ request()->routeIs('student.pay.view') ? 'active' : '' }} menu-link">
                        <div>All List</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('student.paid.view') }}"
                        class="{{ request()->routeIs('student.paid.view') ? 'active' : '' }} menu-link">
                        <div>Paid List</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('student.unpaid.view') }}"
                        class="{{ request()->routeIs('student.unpaid.view') ? 'active' : '' }} menu-link">
                        <div>Unpaid List</div>
                    </a>
                </li>
            </ul>
        </li>

        <li
            class="{{ request()->routeIs('gallery.create') || request()->routeIs('gallery.list') || request()->routeIs('gallery.edit') ? 'active open' : '' }} menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon ti ti-smart-home"></i>
                <div data-i18n="Dashboards">Contact</div>
                <div class="badge bg-label-primary rounded-pill ms-auto">1</div>
            </a>
            <ul class="menu-sub">

                <li class="{{ request()->routeIs('gallery.list') ? 'active' : '' }} menu-item">
                    <a href="{{ route('contact.index') }}" class="menu-link">
                        <div>List</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="{{ request()->routeIs('student.admin.card')? 'active open' : '' }} menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Dashboards">Admit Card</div>
                <div class="badge bg-label-primary rounded-pill ms-auto">2</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('student.admin.card') }}"
                        class="{{ request()->routeIs('student.admin.card') ? 'active' : '' }} menu-link">
                        <div>Download</div>
                    </a>
                </li>
            </ul>
        </li>
        <li
            class="{{ request()->routeIs('users.index') || request()->routeIs('users.create') || request()->routeIs('users.edit') || request()->routeIs('users.show') ? 'active open' : '' }} menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Dashboards">Admin</div>
                <div class="badge bg-label-primary rounded-pill ms-auto">2</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('users.index') }}"
                        class="{{ request()->routeIs('users.index') ? 'active' : '' }} menu-link">
                        <div>List</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('users.create') }}"
                        class="{{ request()->routeIs('users.create') ? 'active' : '' }} menu-link">
                        <div>Create</div>
                    </a>
                </li>
            </ul>
        </li>

        @endif

        <li
            class="{{ request()->routeIs('blogs.index') || request()->routeIs('blogs.create') || request()->routeIs('blogs.edit') || request()->routeIs('blogs.show') ? 'active open' : '' }} menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Dashboards">Result</div>
                <div class="badge bg-label-primary rounded-pill ms-auto">2</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('blogs.index') }}"
                        class="{{ request()->routeIs('blog.index') ? 'active' : '' }} menu-link">
                        <div>List</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('blogs.create') }}"
                        class="{{ request()->routeIs('blog.create') ? 'active' : '' }} menu-link">
                        <div>Create</div>
                    </a>
                </li>
            </ul>
        </li>


        <li
            class="{{ request()->routeIs('gallery.create') || request()->routeIs('gallery.list') || request()->routeIs('gallery.edit') ? 'active open' : '' }} menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon ti ti-school"></i>
                <div data-i18n="Dashboards">Gallery</div>
                <div class="badge bg-label-primary rounded-pill ms-auto">2</div>
            </a>
            <ul class="menu-sub">

                <li class="{{ request()->routeIs('gallery.create') ? 'active' : '' }} menu-item">
                    <a href="{{ route('gallery.create') }}" class="menu-link">
                        <div>Create</div>
                    </a>
                </li>

                <li class="{{ request()->routeIs('gallery.list') ? 'active' : '' }} menu-item">
                    <a href="{{ route('gallery.list') }}" class="menu-link">
                        <div>List</div>
                    </a>
                </li>
            </ul>
        </li>



        <li
        class="{{ request()->routeIs('slider.create') || request()->routeIs('slider.list') || request()->routeIs('slider.edit') ? 'active open' : '' }} menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon ti ti-school"></i>
            <div data-i18n="Dashboards">Slider</div>
            <div class="badge bg-label-primary rounded-pill ms-auto">2</div>
        </a>
        <ul class="menu-sub">

            <li class="{{ request()->routeIs('slider.create') ? 'active' : '' }} menu-item">
                <a href="{{ route('slider.create') }}" class="menu-link">
                    <div>Create</div>
                </a>
            </li>

            <li class="{{ request()->routeIs('slider.list') ? 'active' : '' }} menu-item">
                <a href="{{ route('slider.list') }}" class="menu-link">
                    <div>List</div>
                </a>
            </li>
        </ul>
    </li>





    </ul>
</aside>