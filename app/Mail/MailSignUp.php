<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailSignUp extends Mailable
{
    use Queueable, SerializesModels;
    
    public $signup;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($signup)
    {
        $this->signup= $signup;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      
        return $this
        ->from(config('mail.from.address'))
        ->subject('Candidatura ao Programa de Estágio')
        ->view('mail.signup.index')
        ->with('data',$this->signup);

    }
}
