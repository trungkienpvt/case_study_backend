<?php namespace Modules\User\Events\Handlers;

use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Mail;
use Modules\User\Events\UserHasBegunResetProcess;
use Modules\User\Emails\ResetCodeEmail;

class SendResetCodeEmail
{
    public function handle(UserHasBegunResetProcess $event)
    {
        $user = $event->user;
        $code = $event->code;
        Mail::to('kienvt@yopmail.com')
            ->cc($user->email)
            ->bcc($user->email)
            ->queue(new ResetCodeEmail($user, $code));
    }
}
