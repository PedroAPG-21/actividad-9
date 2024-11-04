<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class WelcomeEmail extends Notification
{
    use Queueable;

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->greeting('¡Bienvenido!')
            ->line('Gracias por registrarte en nuestro sitio.')
            ->action('Visitar Dashboard', url('/dashboard'))
            ->line('¡Esperamos que disfrutes de nuestro servicio!');
    }
}