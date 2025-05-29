<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\User;

class WelcomeUserMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function build()
{
    $content = "
        <html>
            <body>
                <h2>Hi {$this->user->name},</h2>
                <p>Welcome to our platform! We're glad to have you here.</p>
            </body>
        </html>
    ";

    return $this->subject('Welcome to Our App!')
                ->html($content);
}

}
