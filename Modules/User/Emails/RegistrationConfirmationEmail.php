<?php

namespace Modules\User\Emails;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Cartalyst\Sentinel\Users\EloquentUser;

class RegistrationConfirmationEmail extends Mailable
{
    use Queueable, SerializesModels;

    protected $user;
    protected $activationCode;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(EloquentUser $user, $activationCode)
    {
        //
        $this->user = $user;
        $this->activationCode = $activationCode;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('user::emails.welcome')->with(['user'=>$this->user, 'activationcode'=>$this->activationCode]);
    }
}
