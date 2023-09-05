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

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Site Admin Section</span>
        </li>

        <li class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }} menu-item">
            <a href="{{ route('admin.dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Dashboards">Dashboards</div>
            </a>
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
            class="{{ request()->routeIs('classes.index') || request()->routeIs('classes.create') || request()->routeIs('classes.edit') ? 'active open' : '' }} menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon ti ti-school"></i>
                <div data-i18n="Dashboards">Class</div>
                <div class="badge bg-label-primary rounded-pill ms-auto">2</div>
            </a>
            <ul class="menu-sub">
                <li class="{{ request()->routeIs('classes.index') ? 'active' : '' }} menu-item">
                    <a href="{{ route('classes.index') }}" class="menu-link">
                        <div>List</div>
                    </a>
                </li>
                <li class="{{ request()->routeIs('classes.create') ? 'active' : '' }} menu-item">
                    <a href="{{ route('classes.create') }}" class="menu-link">
                        <div>Create</div>
                    </a>
                </li>
            </ul>
        </li>
        <li
            class="{{ request()->routeIs('areas.index') || request()->routeIs('areas.create') || request()->routeIs('areas.edit') ? 'active open' : '' }} menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon ti ti-school"></i>
                <div data-i18n="Dashboards">Area</div>
                <div class="badge bg-label-primary rounded-pill ms-auto">2</div>
            </a>
            <ul class="menu-sub">
                <li class="{{ request()->routeIs('areas.index') ? 'active' : '' }} menu-item">
                    <a href="{{ route('areas.index') }}" class="menu-link">
                        <div>List</div>
                    </a>
                </li>
                <li class="{{ request()->routeIs('areas.create') ? 'active' : '' }} menu-item">
                    <a href="{{ route('areas.create') }}" class="menu-link">
                        <div>Create</div>
                    </a>
                </li>
            </ul>
        </li>
        <li
            class="{{ request()->routeIs('exams.index') || request()->routeIs('exams.create') || request()->routeIs('exams.edit') ? 'active open' : '' }} menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon ti ti-school"></i>
                <div data-i18n="Dashboards">Exams</div>
                <div class="badge bg-label-primary rounded-pill ms-auto">2</div>
            </a>
            <ul class="menu-sub">
                <li class="{{ request()->routeIs('exams.index') ? 'active' : '' }} menu-item">
                    <a href="{{ route('exams.index') }}" class="menu-link">
                        <div>List</div>
                    </a>
                </li>
                <li class="{{ request()->routeIs('exams.create') ? 'active' : '' }} menu-item">
                    <a href="{{ route('exams.create') }}" class="menu-link">
                        <div>Create</div>
                    </a>
                </li>
            </ul>
        </li>
        <li
            class="{{ request()->routeIs('students.index') || request()->routeIs('students.create') || request()->routeIs('students.edit') ? 'active open' : '' }} menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon ti ti-school"></i>
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
            class="{{ request()->routeIs('student.pay.view') || request()->routeIs('student.paid.view') || request()->routeIs('student.unpaid.view') ? 'active open' : '' }} menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon ti ti-school"></i>
                <div data-i18n="Dashboards">Student pay</div>
                <div class="badge bg-label-primary rounded-pill ms-auto">2</div>
            </a>
            <ul class="menu-sub">
                <li class="{{ request()->routeIs('student.pay.view') ? 'active' : '' }} menu-item">
                    <a href="{{ route('student.pay.view') }}" class="menu-link">
                        <div>All List</div>
                    </a>
                </li>
                <li class="{{ request()->routeIs('student.paid.view') ? 'active' : '' }} menu-item">
                    <a href="{{ route('student.paid.view') }}" class="menu-link">
                        <div>Paid List</div>
                    </a>
                </li>
                <li class="{{ request()->routeIs('student.unpaid.view') ? 'active' : '' }} menu-item">
                    <a href="{{ route('student.unpaid.view') }}" class="menu-link">
                        <div>Unpaid List</div>
                    </a>
                </li>
            </ul>
        </li>
        <li
            class="{{ request()->routeIs('student.admin.card') || request()->routeIs('student.admin.card') || request()->routeIs('student.admin.card') ? 'active open' : '' }} menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon ti ti-school"></i>
                <div data-i18n="Dashboards">Admit Card</div>
                <div class="badge bg-label-primary rounded-pill ms-auto">2</div>
            </a>
            <ul class="menu-sub">
                <li class="{{ request()->routeIs('student.admin.card') ? 'active' : '' }} menu-item">
                    <a href="{{ route('student.admin.card') }}" class="menu-link">
                        <div>Download</div>
                    </a>
                </li>
            </ul>
        </li>


        <li
            class="{{ request()->routeIs('users.index') || request()->routeIs('users.create') || request()->routeIs('users.edit') ? 'active open' : '' }} menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon ti ti-school"></i>
                <div data-i18n="Dashboards">Admin User</div>
                <div class="badge bg-label-primary rounded-pill ms-auto">2</div>
            </a>
            <ul class="menu-sub">
                <li class="{{ request()->routeIs('users.index') ? 'active' : '' }} menu-item">
                    <a href="{{ route('users.index') }}" class="menu-link">
                        <div>Admin</div>
                    </a>
                </li>
                <li class="{{ request()->routeIs('users.create') ? 'active' : '' }} menu-item">
                    <a href="{{ route('users.create') }}" class="menu-link">
                        <div>Create</div>
                    </a>
                </li>
            </ul>
        </li>


        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">For Frontend</span>
        </li>


        <li
            class="{{ request()->routeIs('gallery.list') || request()->routeIs('gallery.create') || request()->routeIs('gallery.edit') ? 'active open' : '' }} menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon ti ti-school"></i>
                <div data-i18n="Dashboards">Gallery</div>
                <div class="badge bg-label-primary rounded-pill ms-auto">2</div>
            </a>
            <ul class="menu-sub">
                <li class="{{ request()->routeIs('gallery.list') ? 'active' : '' }} menu-item">
                    <a href="{{ route('gallery.list') }}" class="menu-link">
                        <div>List</div>
                    </a>
                </li>
                <li class="{{ request()->routeIs('gallery.create') ? 'active' : '' }} menu-item">
                    <a href="{{ route('gallery.create') }}" class="menu-link">
                        <div>Create</div>
                    </a>
                </li>
            </ul>
        </li>
        <li
            class="{{ request()->routeIs('slider.list') || request()->routeIs('slider.create') || request()->routeIs('slider.edit') ? 'active open' : '' }} menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon ti ti-school"></i>
                <div data-i18n="Dashboards">Slider</div>
                <div class="badge bg-label-primary rounded-pill ms-auto">2</div>
            </a>
            <ul class="menu-sub">
                <li class="{{ request()->routeIs('slider.list') ? 'active' : '' }} menu-item">
                    <a href="{{ route('slider.list') }}" class="menu-link">
                        <div>List</div>
                    </a>
                </li>
                <li class="{{ request()->routeIs('slider.create') ? 'active' : '' }} menu-item">
                    <a href="{{ route('slider.create') }}" class="menu-link">
                        <div>Create</div>
                    </a>
                </li>
            </ul>
        </li>
        <li
            class="{{ request()->routeIs('menu.list') || request()->routeIs('menu.create') || request()->routeIs('menu.edit') ? 'active open' : '' }} menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon ti ti-school"></i>
                <div data-i18n="Dashboards">Menu</div>
                <div class="badge bg-label-primary rounded-pill ms-auto">2</div>
            </a>
            <ul class="menu-sub">
                <li class="{{ request()->routeIs('menu.list') ? 'active' : '' }} menu-item">
                    <a href="{{ route('menu.list') }}" class="menu-link">
                        <div>List</div>
                    </a>
                </li>
                <li class="{{ request()->routeIs('menu.create') ? 'active' : '' }} menu-item">
                    <a href="{{ route('menu.create') }}" class="menu-link">
                        <div>Create</div>
                    </a>
                </li>
            </ul>
        </li>

        <li
            class="{{ request()->routeIs('history.index') || request()->routeIs('history.create') || request()->routeIs('history.edit') ? 'active open' : '' }} menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon ti ti-school"></i>
                <div data-i18n="Dashboards">History</div>
                <div class="badge bg-label-primary rounded-pill ms-auto">2</div>
            </a>
            <ul class="menu-sub">
                <li class="{{ request()->routeIs('history.index') ? 'active' : '' }} menu-item">
                    <a href="{{ route('history.index') }}" class="menu-link">
                        <div>List</div>
                    </a>
                </li>
                <li class="{{ request()->routeIs('history.create') ? 'active' : '' }} menu-item">
                    <a href="{{ route('history.create') }}" class="menu-link">
                        <div>Create</div>
                    </a>
                </li>
            </ul>
        </li>

        <li
            class="{{ request()->routeIs('sponsor.index') || request()->routeIs('sponsor.create') || request()->routeIs('sponsor.edit') ? 'active open' : '' }} menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon ti ti-clipboard"></i>
                <div data-i18n="Dashboards">Sponsor</div>
                <div class="badge bg-label-primary rounded-pill ms-auto">2</div>
            </a>
            <ul class="menu-sub">

                <li class="{{ request()->routeIs('sponsor.create') ? 'active' : '' }} menu-item">
                    <a href="{{ route('sponsor.create') }}" class="menu-link">
                        <div>Create</div>
                    </a>
                </li>

                <li class="{{ request()->routeIs('sponsor.index') ? 'active' : '' }} menu-item">
                    <a href="{{ route('sponsor.index') }}" class="menu-link">
                        <div>List</div>
                    </a>
                </li>
            </ul>
        </li>
        <li
            class="{{ request()->routeIs('ad.index') || request()->routeIs('ad.create') || request()->routeIs('ad.edit') ? 'active open' : '' }} menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon ti ti-clipboard"></i>
                <div data-i18n="Dashboards">Ad</div>
                <div class="badge bg-label-primary rounded-pill ms-auto">2</div>
            </a>
            <ul class="menu-sub">

                <li class="{{ request()->routeIs('ad.create') ? 'active' : '' }} menu-item">
                    <a href="{{ route('ad.create') }}" class="menu-link">
                        <div>Create</div>
                    </a>
                </li>

                <li class="{{ request()->routeIs('ad.index') ? 'active' : '' }} menu-item">
                    <a href="{{ route('ad.index') }}" class="menu-link">
                        <div>List</div>
                    </a>
                </li>
            </ul>
        </li>

        <li
            class="{{ request()->routeIs('blogs.index') || request()->routeIs('blogs.create') || request()->routeIs('blogs.edit') ? 'active open' : '' }} menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon ti ti-clipboard"></i>
                <div data-i18n="Dashboards">Blogs</div>
                <div class="badge bg-label-primary rounded-pill ms-auto">2</div>
            </a>
            <ul class="menu-sub">

                <li class="{{ request()->routeIs('blogs.create') ? 'active' : '' }} menu-item">
                    <a href="{{ route('blogs.create') }}" class="menu-link">
                        <div>Create</div>
                    </a>
                </li>

                <li class="{{ request()->routeIs('blogs.index') ? 'active' : '' }} menu-item">
                    <a href="{{ route('blogs.index') }}" class="menu-link">
                        <div>List</div>
                    </a>
                </li>
            </ul>
        </li>
        <li
            class="{{ request()->routeIs('members.index') || request()->routeIs('members.create') || request()->routeIs('members.edit') ? 'active open' : '' }} menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon ti ti-clipboard"></i>
                <div data-i18n="Dashboards">Members</div>
                <div class="badge bg-label-primary rounded-pill ms-auto">2</div>
            </a>
            <ul class="menu-sub">

                <li class="{{ request()->routeIs('members.create') ? 'active' : '' }} menu-item">
                    <a href="{{ route('members.create') }}" class="menu-link">
                        <div>Create</div>
                    </a>
                </li>

                <li class="{{ request()->routeIs('members.index') ? 'active' : '' }} menu-item">
                    <a href="{{ route('members.index') }}" class="menu-link">
                        <div>List</div>
                    </a>
                </li>
            </ul>
        </li>

        <li
            class="{{ request()->routeIs('contact.index') || request()->routeIs('contact.create') || request()->routeIs('contact.edit') ? 'active open' : '' }} menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon ti ti-clipboard"></i>
                <div data-i18n="Dashboards">Contact</div>
                <div class="badge bg-label-primary rounded-pill ms-auto">1</div>
            </a>
            <ul class="menu-sub">

                <li class="{{ request()->routeIs('contact.index') ? 'active' : '' }} menu-item">
                    <a href="{{ route('contact.index') }}" class="menu-link">
                        <div>List</div>
                    </a>
                </li>
            </ul>
        </li>

        </li>
        @endif
    </ul>
</aside>
