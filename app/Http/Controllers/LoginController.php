<?php namespace App\Http\Controllers;

use Validator;
use Auth;
use Input;
use Redirect;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use App\User;

  class LoginController extends Controller {

    public function getLogin(){
        return View('login');
    }

    public function postLogin(){
      $username= Input::get('username');
      $password= Input::get('password');

        $rules = array('username' => 'required','password' => 'required');
        $validator = Validator::make(Input::all(), $rules);

        if($validator->fails()){
          //redirect to error login page
            return View('login');
        }

        $auth= Auth::attempt(array(
          'username' => $username,
          'password' => $password
        ),false);

        if(!$auth){
          return View('login');
        }

        //get user position
        $users= User::where('username','=',$username,'and')
              ->where('password','=',$password)
              ->pluck('user_position');

        $position = $users;

        $users1 = User::where('username','=',$username,'and')
              ->where('password','=',$password)
              ->pluck('user_fname');

        if($position == 'salesperson'){
          //redirect to home page
          //code for triggering a user was verified

          return redirect()->route('saleperson', [$users1]);
        }
        else if($position == 'manager'){
          //redirect to home page
            //code for triggering a user was verified
          return redirect()->route('manager', [$users1]);
        }
        else if($position == 'production staff'){
          //redirect to home page
            //code for triggering a user was verified
          return redirect()->route('production', [$users1]);
        }
        else{
          //error user name and password
          return View('login');
        }
    }

  }

 ?>
