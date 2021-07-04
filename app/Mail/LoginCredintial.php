<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
//use Illuminate\Support\Facades\Request;
use Illuminate\Http\Request;
use App\Users;
use Illuminate\Support\Facades\DB;

class LoginCredintial extends Mailable {

    use Queueable,
        SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct() {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request) {

//        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
//        $pass = array(); //remember to declare $pass as an array
//        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
//        for ($i = 0; $i < 8; $i++) {
//            $n = rand(0, $alphaLength);
//            $pass[] = $alphabet[$n];
//        }
//        $errors=[];
//        if(empty($request->t_name)||$request->t_name='')
//        {
//            
//        }
        $user = DB::table('users')->where('username', $request->t_username)->first();
        
            return $this->view('emails.trackers.logincredintial', ['password' => $user->password, 'username' => $request->t_username])->to($request->t_email);
        
    }

}
