<?php

namespace CONDER\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class UserCreated extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject("Sua conta no sistema foi criada")
                    ->greeting("Olá {$notifiable->name}, seja bem-vindo")
                    ->line("Seu número de matrícula é: {$notifiable->enrolment}")
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Obrigado por utilizar o nosso sistema');
    }
}
