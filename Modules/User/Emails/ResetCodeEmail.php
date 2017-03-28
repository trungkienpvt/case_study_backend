<?php

namespace Modules\User\Emails;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Cartalyst\Sentinel\Users\EloquentUser;
class ResetCodeEmail extends Mailable
{
    use Queueable, SerializesModels;
    protected $user;
    protected $code;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(EloquentUser $user, $code)
    {
        //
        $this->user = $user;
        $this->code = $code;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('user::emails.reminder')->with(['user'=>$this->user, 'code'=>$this->code]);
    }
}
