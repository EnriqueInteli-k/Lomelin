<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

public function username()
	{
    return 'username';
	}

        
public function email()
{
    return 'email';
}        
        
protected function credentials(Request $request)
    {
        //$field = filter_var($request->get($this->username()), FILTER_VALIDATE_EMAIL)
        //    ? $this->username()
        //    : 'username';
    $email = $request->get($this->username());

  if (filter_var($email, FILTER_VALIDATE_EMAIL)) 
        {
        $field = $this->email();
      // valid email address
      return [$field => $request->get($this->username()),'password' => $request->password,];
        }
        
        else
        {
      // usernane
            
         $field = $this->username();   
       return [$field => $request->get($this->username()),'password' => $request->password,];     
        }
    
    
        //return [$field => $request->get($this->username()),'password' => $request->password,];
    }



public function showLoginForm()
{

return view('auth.login_form');
}

}
