<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FeatureCard extends Component
{
    public $title;
    public $icon;
    public $description;
    public $badge;
    public $theme;

    public function __construct($title, $icon, $description, $badge, $theme)
    {
        $this->title = $title;
        $this->icon = $icon;
        $this->description = $description;
        $this->badge = $badge;
        $this->theme = $theme;
    }

    public function render()
    {
        return view('components.feature-card');
    }
}
