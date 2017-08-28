<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Queja;
use Illuminate\Support\Facades\URL;

class NotificacionEntidad extends Mailable
{
    use Queueable, SerializesModels;

    protected $queja;

    public function __construct(Queja $queja)
    {
        $this->queja = $queja;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.notificacionentidad')
        ->with([
                        'department' => $this->queja->department,
                        'problem' => $this->queja->problem,
                        'solution' => $this->queja->solution,
                        'url' => URL::to('quejas/'.$this->queja->id),
                       
                    ]);
    }
}
