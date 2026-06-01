<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    const array VARIANT_COLOR_CSS_CLASSES = [
        'primary' => 'bg-blue-500 hover:bg-blue-700',
        'danger' => 'bg-red-500 hover:bg-red-700',
    ];


    public function __construct(
        public string $variant = 'primary',
        public ?string $href = null,
    )
    {
    }

    public function getVariantColorClasses(): string
    {
        return self::VARIANT_COLOR_CSS_CLASSES[$this->variant];
    }

    public function render(): View|Closure|string
    {
        return view('components.button');
    }
}
