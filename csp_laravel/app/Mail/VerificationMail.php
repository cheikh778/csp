<?php
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VerificationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function build()
    {
        return $this->view('emails.verifEmail')
                    ->with([
                        'name' => $this->user->fname . ' ' . $this->user->name,
                        'verification_link' => route('verification.verify', $this->user->id)
                    ]);
    }
}
