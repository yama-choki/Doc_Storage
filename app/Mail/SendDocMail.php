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
    public function __construct($user, $category, $title, $url, $text)
    {
        $this->user = $user;
        $this->category = $category;
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
                ->subject($this->user->name."から".$this->category."に関する資料が届きました。")
                ->with([
                    'title' => $this->title,
                    'url' => $this->url,
                    'text' => $this->text,
                    'user' => $this->user
                ]);
    }


}
