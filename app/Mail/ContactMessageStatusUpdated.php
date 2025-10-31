<?php

namespace App\Mail;

use App\Models\ContactMessage;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMessageStatusUpdated extends Mailable
{
    use Queueable, SerializesModels;

    public ContactMessage $messageModel;
    public string $status;
    public ?string $reason;

    public function __construct(ContactMessage $messageModel, string $status, ?string $reason = null)
    {
        $this->messageModel = $messageModel;
        $this->status = $status;
        $this->reason = $reason;
    }

    public function build(): self
    {
        return $this->subject('Your inquiry status was updated')
            ->view('emails.message_status')
            ->with([
                'name' => $this->messageModel->name,
                'subjectLine' => $this->messageModel->subject,
                'status' => $this->status,
                'reason' => $this->reason,
            ]);
    }
}
