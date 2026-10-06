<?php
namespace App\Mail;

use App\Models\SupportRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewSupportRequestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $supportRequest;

    public function __construct(SupportRequest $supportRequest)
    {
        $this->supportRequest = $supportRequest;
    }

    public function build()
    {
        return $this->subject('New Support Intent: ' . $this->supportRequest->name)->view('emails.support_notification');
    }
}
