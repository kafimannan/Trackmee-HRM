<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\LoginCredintial;
use App\Mail\unlockAccount;
use App\Users;
use App\Profile;
use DB;

class TrackerProfileController extends Controller {

    public function show() {
        $users = DB::table('users')->join('profiles', 'users.userId', '=', 'profiles.userId')->where('users.userId', '<>', session('loggedUser')->userId)->select('users.*', 'profiles.*')->paginate(5);
        return view('backend.Admin.Tracker.list', compact('users'));
    }

    public function add() {
        return view('backend.Admin.Tracker.add');
    }

    public function store(Request $request) {

        $errors = [];
        if (empty($request->t_name) || $request->t_name == '') {
            $errors['t_name'] = "Name required";
        }
        if (empty($request->t_username) || $request->t_username == '') {
            $errors['t_username'] = "Username required";
        }
        if (empty($request->t_email) || $request->t_email == '') {
            $errors['t_email'] = "Email required";
        }
        if (empty($request->t_type) || $request->t_type == '-1') {
            $errors['t_type'] = "Select a type";
        }
        $checkEmail = DB::table('profiles')->where('email', $request->t_email)->first();
        if ($checkEmail != null) {
            $errors['t_email'] = "email address already exist";
        }
        $checkuser = DB::table('users')->where('username', $request->t_username)->first();
        if ($checkuser != null) {
            $errors['t_username'] = "username address already exist";
        }
        if (count($errors) > 0) {
            return back()->with('errors', $errors)->withInput();
        } else {
            $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
            $pass = array(); //remember to declare $pass as an array
            $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
            for ($i = 0; $i < 8; $i++) {
                $n = rand(0, $alphaLength);
                $pass[] = $alphabet[$n];
            }
            $user = new Users();
            $user->username = $request->t_username;
            $user->password = implode($pass);
            $user->type = $request->t_type;
            $user->save();

            $profile = new Profile();
            $profile->userId = $user->userId;
            $profile->fullName = $request->t_name;
            $profile->email = $request->t_email;
            $profile->save();

            try {
                Mail::send(new LoginCredintial());
                return redirect()->route('admin.tracker.show')->with('successMsg', 'Message sent successfully');
            } catch (Exception $e) {
                return redirect()->route('admin.tracker.show')->with('errMsg', 'Message sending failed');
            }
        }
    }

    public function edit($id) {
        $users = DB::table('users')->join('profiles', 'users.userId', '=', 'profiles.userId')->select('users.*', 'profiles.*')->where('users.userId', $id)->first();
        return view('backend.Admin.Tracker.edit', compact('users'));
    }

    public function update($id, Request $request) {
        $user = Users::find($request->userId);
        $user->type = $request->t_type;
        $user->save();
        return redirect()->route('admin.tracker.show');
    }

    public function delete($id, Request $request) {
        //return $id;
        $user = Users::destroy($id);
        $profile = Profile::where('userId', $request->userId)->first();
        $prof = Profile::destroy($profile->id);
//        $user->destroy();
//        $profile->destroy();

        return redirect()->route('admin.tracker.show');
    }

    public function unlock() {
        return view('backend.Admin.Tracker.unlockAccount');
    }

    public function send(Request $request) {
        $errors = [];
        if ($request->email == '' || empty($request->email)) {
            $errors['email'] = "email address required";
        }
        $checkEmail = DB::table('profiles')->where('email', $request->email)->first();
        if ($checkEmail == null) {
            $errors['email'] = "Tracker must be registered first";
        }
        else if($checkEmail->userId==session('loggedUser')->userId)
        {
            $errors['email']="You are already logged in. please visit change password to reset your password";
        }
        if (count($errors) > 0) {
            return back()->with('errors', $errors);
        } else {
            $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
            $pass = array(); //remember to declare $pass as an array
            $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
            for ($i = 0; $i < 8; $i++) {
                $n = rand(0, $alphaLength);
                $pass[] = $alphabet[$n];
            }
            $user= Users::join('profiles','users.userId','profiles.userId')->where('profiles.email',$request->email)->select('users.*')->first();
            $user->password=implode($pass);
            $user->save();
            try {
                Mail::send(new unlockAccount());
                return redirect()->route('admin.tracker.unlock')->with('successMsg', 'Message sent successfully');
            } catch (Exception $e) {
                return redirect()->route('admin.tracker.unlock')->with('errMsg', 'Message sending failed');
            }
            //return redirect()->route('admin.tracker.unlock');
        }
    }

}
