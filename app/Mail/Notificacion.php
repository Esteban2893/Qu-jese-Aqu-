<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\URL;
use App\User;

class Notificacion extends Mailable
{
    use Queueable, SerializesModels;

    
    public function __construct()
    {
        
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
       return $this->markdown('emails.notificacion')->with(['url' => URL::to('/')]);
    }
}
