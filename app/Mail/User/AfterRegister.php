<?php

namespace App\Mail\User;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AfterRegister extends Mailable
{
    use Queueable, SerializesModels;

    private $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this-> user = $user;    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Pendaftaran di Kawan Data')->markdown('emails.user.afterRegister', [
            'user' => $this->user
        ]);
    }
}
