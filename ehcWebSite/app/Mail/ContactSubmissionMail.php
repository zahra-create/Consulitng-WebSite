<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;

class ContactSubmissionMail extends Mailable
{   public $request;
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct($request)
    {
        $this->request = $request;
    }

    /**
     * Get the message envelope.
     */
    public function envelope()
    {  
        return new Envelope(
            from: new Address($this->request['email'], $this->request['name']),
            replyTo: [
                new Address($this->request['email'], $this->request['name'])
            ],
            subject: 'Contact'
         );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mails.contactMail',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
