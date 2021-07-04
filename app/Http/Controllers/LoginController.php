<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller {

    public function index(Request $request) {
        $user = DB::table('users')
                ->where('username', $request->username)
                ->where('password', $request->password)
                ->first();
        if ($user != null) {
            //return response('hello');
            $request->session()->put('loggedUser', $user);
            if ($user->type == 'Admin') {
                //echo"hello";
                $response=["status"=>"success","url"=>route('admin.index')];
                return response()->json($response);
            } else {
                $response=["status"=>"success","url"=>route('tracker.index')];
                //return redirect()->route('tracker.index');
                return response()->json($response);
                
            }
        } else {
            
            //$request->session()->flash('error','Invalid Usernam or password');
            $response=["status"=>"failure","err"=>"Invalid usename or password"];
            //return redirect()->route('index');
            return response($response);
        }
    }

}
