<?php

namespace App\View\Components;

use Closure;
use Illuminate\Support\Str;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Input extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $label,
        public string $type = 'text',
        public string $name = '',
        public string $placeholder = '',
        public string|null $value = '',
        public string|bool $required = false,
    ) {
        if ($name == '') {
            $this->placeholder = Str::upper($this->name);
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}
