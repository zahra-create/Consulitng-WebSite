<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Attachment;


class CondidatureSubmissionMail extends Mailable
{   public $request;
    public $fileName;
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request,$fileName)
    {
        $this->request = $request;
        $this->fileName = $fileName;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {  
        return new Envelope(
            from: new Address($this->request['email'], $this->request['name']),
            replyTo: [
                new Address($this->request['email'], $this->request['name'])
            ],
            subject:  'Recrutement'
         );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'carriere.condidature spontanee.condidatureMail',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
      $attachements = [];

       if ($this->fileName){
        $attachements =[ Attachment::fromPath(public_path("attachment\\" .$this->fileName))];
       }
       return $attachements;
       
    }
}
