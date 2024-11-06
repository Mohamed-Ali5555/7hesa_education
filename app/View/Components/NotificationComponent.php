<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NotificationComponent extends Component
{
    public $unReadNotifications;
    public function __construct()
    {
        if(auth()->check()){
            $user = auth()->user();
            $this->unReadNotifications = $user->notifications()->unreadNotifications();
        }elseif(auth('teacher')->check()){
            $user = auth('teacher')->user();
            $this->unReadNotifications = $user->notifications()->unreadNotifications();
        }
        // $unReadNotifications
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.notification-component');
    }
}
