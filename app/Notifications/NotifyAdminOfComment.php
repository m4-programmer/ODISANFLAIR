<?php

namespace App\Notifications;

use App\Models\Comment;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NotifyAdminOfComment extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(public Comment $comment)
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('New Comment Submitted')
            ->greeting('Hello Admin,')
            ->line('A new comment has been submitted.')
            ->line('Name: ' . $this->comment->name)
            ->line('Email: ' . $this->comment->email)
            ->line('Website: ' . $this->comment->website)
            ->line('Comment: ' . $this->comment->comment)
            ->action('View Post', url($this->comment?->post?->tags?->slug ."/". $this->comment?->post?->slug))
            ->line('IP Address: ' . $this->comment->ipAddress);
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
