<?php namespace Modules\User\Events\Handlers;

use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Mail;
use Modules\Core\Contracts\Authentication;
use Modules\User\Events\UserHasRegistered;
use Modules\User\Emails\RegistrationConfirmationEmail;
class SendRegistrationConfirmationEmail
{
    /**
     * @var AuthenticationRepository
     */
    private $auth;

    public function __construct(Authentication $auth)
    {
        $this->auth = $auth;
    }

    public function handle(UserHasRegistered $event)
    {
        $user = $event->user;

        $activationCode = $this->auth->createActivation($user);

        $data = [
            'user' => $user,
            'activationcode' => $activationCode,
        ];

        Mail::to($user->email)
            ->cc($user->email)
            ->bcc($user->email)
            ->queue(new RegistrationConfirmationEmail($user, $activationCode));

       
    }
}
