<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

use App\User;

class SendMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $User;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $User)
    {
        //
        $this->User = $User;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        if ($this->User->verified_email == 0)
        {
            return $this->from('example@example.com')->view('theme/register/forget_password/email_template/welcome')
                ->with([
                        'verification_key' => $this->User->verification_key,
                        'user' => $this->User,
                ]);
        }
        else 
        {
            return $this->from('example@example.com')->view('registration/emails/forget_password')
                ->with([
                        'verification_key' => $this->User->verification_key,
                        'user' => $this->User,
                ]);
        }

        // return $this->view('welcome');
    }
}
