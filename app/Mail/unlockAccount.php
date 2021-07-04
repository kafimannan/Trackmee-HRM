<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use Illuminate\Http\Request;
use App\Users;
use Illuminate\Support\Facades\DB;

class unlockAccount extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
        $user = DB::table('users')->join('profiles','users.userId','=','profiles.userId')->where('email', $request->email)->first();
        
            return $this->view('emails.trackers.logincredintial', ['password' => $user->password, 'username' => $user->username])->to($request->email);
    }
}
