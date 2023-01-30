<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendDocMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $subject, $title, $url, $text)
    {
        $this->user = $user;
        $this->subject = $subject;
        $this->title = $title;
        $this->url = $url;
        $this->text = $text;
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.doc')
                ->subject($this->subject)
                ->from($this->user->email, $this->user->name )
                ->with([
                    'title' => $this->title,
                    'url' => $this->url,
                    'text' => $this->text,
                    'user' => $this->user
                ]);
    }

    
}
