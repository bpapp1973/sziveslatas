<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Models\Counties;
use App\Models\Cities;
use App\Models\ActivationService;
use Validator;
use Input;
use Flash;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;

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

    //This is neccessary to login with username instead of email
    protected $username = 'username';
    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    protected $activationService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ActivationService $activationService)
    {
        $this->middleware('guest');
        $this->activationService = $activationService;
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
            'username'      => 'required|max:255|unique:users',
            'email'         => 'required|email|max:255|unique:users',
            'password'      => 'required|min:6|confirmed',
            'first_name'    => 'required|max:255',
            'last_name'     => 'required|max:255',
            'birthday'      => 'required|max:255',
            'address'       => 'required|max:255',
            'city'          => 'required|max:10000',
            'phone'         => 'required|max:255',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'username'      => $data['username'],
            'email'         => $data['email'],
            'password'      => bcrypt($data['password']),
            'first_name'    => $data['first_name'],
            'last_name'     => $data['last_name'],
            'birthday'      => $data['birthday'],
            'address'       => $data['address'],
            'cities_id'     => $data['city'],
            'phone'         => $data['phone'],
        ]);
    }
    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return view('auth.register', ['counties' => Counties::pluck('name', 'id'), 'cities' => ['' => '']]);
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        //$this->guard()->login($user);
        $this->activationService->sendActivationMail($user);

        //return redirect($this->redirectPath());
        return redirect('/login')->with('status', 'Az aktivációs kódot elküldtük, ellenőrizd a postafiókodat.');
    }

    public function activateUser($token)
    {
        if ($user = $this->activationService->activateUser($token)) {
            auth()->login($user);
            return redirect($this->redirectPath());
        }
        //ToDo:
        abort(404);
    }


/*
    public function cityDropDownData()
    {
        $county_id = $_REQUEST['county'];
        //$county_id = Input::get('county');
        $cities = Cities::where('counties_id', '=' , $county_id)->get();
        return $cities;
    }
*/
}
