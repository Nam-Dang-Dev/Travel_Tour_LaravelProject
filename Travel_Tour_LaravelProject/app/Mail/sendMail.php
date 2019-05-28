<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class sendMail extends Mailable
{
    use Queueable, SerializesModels;
    public $sub;
   
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($subject)
    {
        $this->sub = $subject;
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $m_subject = $this->sub;
       
        return $this->view('user.pages.mail.sendEmail')->subject($m_subject);
    }
}
