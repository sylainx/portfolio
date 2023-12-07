<?php

namespace App\Mail;

use Illuminate\Mail\Message;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable {
    use Queueable, SerializesModels;

    public string $name;
    public string $email;
    public string $subj;
    public string $message;

    /**
     * Create a new message instance.
     */
    public function __construct(string $name, string $email, string $subj, string $message) {
        $this->name = $name;
        $this->email = $email;
        $this->subj = $subj;
        $this->message = $message;
    }

    public function build(Message $message) {
        // ...
        $message->replyTo($this->email);
    }
    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope {
        return new Envelope(
            subject: $this->subj,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content {
        return new Content(
            markdown: 'emails.contact_mail',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array {
        return [];
    }
}
