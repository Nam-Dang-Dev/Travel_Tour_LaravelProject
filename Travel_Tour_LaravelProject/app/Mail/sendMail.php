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
    public $mes;
   
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($subject, $message)
    {
        $this->sub = $subject;
        $this->mes = $message;
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $m_subject = $this->sub;
        $m_message = $this->mes;
       
        return $this->view('user.pages.mail.sendEmail',compact('m_message'))->subject($m_subject);
    }
}
