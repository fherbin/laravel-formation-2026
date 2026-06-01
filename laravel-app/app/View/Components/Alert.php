<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    const array TYPE_COLOR_CSS_CLASSES = [
        'success' => 'bg-green-100 border-green-400 text-green-700',
        'info' => 'bg-blue-100 border-blue-400 text-blue-700',
        'warning' => 'bg-yellow-100 border-yellow-400 text-yellow-700',
        'danger' => 'bg-red-100 border-red-400 text-red-700',
        'error' => 'bg-orange-100 border-orange-400 text-orange-700',
    ];


    public function __construct(public string $type = 'success')
    {
    }

    public function getTypeColorClasses(): string
    {
        return self::TYPE_COLOR_CSS_CLASSES[$this->type];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
