<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\TiposUsuarios;
use Illuminate\Http\Request;
use Auth;




class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }


    public function showRegistrationForm()
   {

 $tipos = TiposUsuarios::all(['id','desc'])->pluck('desc', 'id');
    return view('auth.register_form',['tiposUsuarios'=>$tipos]);

   }

   
    public function showRegistrationFormReferidos()
   {

     return view('auth.register_formReferidos');

   }

   
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'min:4'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
//dd($data);
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
        ]);
    }

public function register(Request $request)
{


$username = $request->get('username');
$oriPassword = $request->get('password');
$password = bcrypt($request->get('password'));

 $user = new User;
         $user->name = $request->get('name');
          $user->username = $username;
          $user->email = $request->get('email');
          $user->password = $password;
          $user->save();



  $credentials = [
        'username' => $username,
        'password' => $oriPassword,
    ];

    // Attempt to login the user
    if (Auth::attempt($credentials)) {
        return redirect()->route('home');
    }



return redirect()->route('login')->with($request->only('username','password'));
}

/*
public function postRegister(Request $request)
{
    // Retrieve all request data including username, email & password.
    // I assume that the data IS validated.
    $input = $request->all();

    // Hash the password
    $input['password'] = bcrypt($input['password']);

    // Create the user
    User::create($input);

    // Redirect
    return redirect()
        // To the route named `login`
        ->route('login')

        // And flash the request data into the session,
        // if you flash the `$input` into the session, you'll
        // get a "Failure" message again. That's because the 
        // password in the $input array is already hashed and 
        // the attempt() method requires user's password, not 
        // the hashed copy of it. 
        //
        ->with($request->only('username', 'password'));
}

*/
public function postLogin(Request $request)
{
    // Create the array using the values from the session
    $credentials = [
        'username' => session('username'),
        'password' => session('password'),
    ];

    // Attempt to login the user
    if (Auth::attempt($credentials)) {
        return redirect()->route('dashboard');
    }

    return 'Failure';
}


}
