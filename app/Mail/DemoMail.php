<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Http\Controllers\MailController;
use App\Http\Controllers\MailController\mailData;
class DemoMail extends Mailable
{
    use Queueable, SerializesModels;
   public $subject;
    public $message;
    /**
     * Create a new message instance.
     */
    public function __construct($subject, $message)
    {
      $this->subject = $subject;
        $this->message = $message;
    }
    public function build()
    {
        return $this->subject($this->subject)
                    ->markdown('emails.send');
    }
    

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Demo Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.demoMail',
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
