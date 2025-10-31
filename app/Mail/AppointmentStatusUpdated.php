<?php

namespace App\Mail;

use App\Models\Appointment;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AppointmentStatusUpdated extends Mailable
{
    use Queueable, SerializesModels;

    public Appointment $appointment;
    public string $status;
    public ?string $reason;

    public function __construct(Appointment $appointment, string $status, ?string $reason = null)
    {
        $this->appointment = $appointment;
        $this->status = $status;
        $this->reason = $reason;
    }

    public function build(): self
    {
        return $this->subject('Your appointment status was updated')
            ->view('emails.appointment_status')
            ->with([
                'name' => $this->appointment->name,
                'status' => $this->status,
                'reason' => $this->reason,
                'service' => $this->appointment->service,
                'preferred' => optional($this->appointment->preferred_date)->format('Y-m-d H:i'),
            ]);
    }
}
