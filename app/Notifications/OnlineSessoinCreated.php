<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class OnlineSessoinCreated extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    protected $teacherName;
    protected $sessionAt;
    public function __construct($teacherName, $sessionAt)
    {
        $this->teacherName = $teacherName;
        $this->sessionAt = $sessionAt;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    public function toArray($notifiable)
    {
        return [
            'data' => "لديك حصه في يوم {$this->sessionAt} من المدرس {$this->teacherName}"
        ];
    }
}
