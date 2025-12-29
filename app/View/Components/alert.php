<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class alert extends Component
{
    private string $msg;

    /**
     * Create a new component instance.
     */
    public function __construct(string $msg)
    {
        $this->msg = $msg;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert',['msg'=>$this->msg]);
    }
}
