<?php



namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    // protected $redirectTo = '/';
    protected $redirectTo = RouteServiceProvider::HOME;

    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function __construct()

    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.site-login');
    }
    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function login(Request $request)

    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);
         $checkDetails = User::where('email', $request->username)
            ->orWhere('username', $request->username)->first();
        if ($checkDetails == null) {
            // Session::flash('authFailed', 'Email not exist, Kindly register now');
            return response()->json(['authFailed' => 'Email or Username can not be find, Kindly register now', 'LoginStatus' => null], 200);
        }
        if ($checkDetails->isActive != 1) {
            return response()->json(['authFailed' => 'Your Account is currently In-active, Kindly contact Administrator, THANKS', 'LoginStatus' => 0, 'redirect' => route('login'), 'problem' => 1], 200);
        }
        $fieldType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        if (Auth::attempt(array($fieldType => $request['username'], 'password' => $request['password']))) {
            request()->session()->flash('successful-login', 'Login successfully');
            return response()->json(['authSuccess' => 'Successful, Redirecting...', 'redirect' => route('site-dashboard'), 'LoginStatus' => 1], 200);
        } else {
            request()->session()->flash('failed', 'Logout successfully');
            return response()->json(['authError' => 'Invalid email or username and password. Please check your details and try again.', 'LoginStatus' => 0], 500);
        }
    }

    public function logout()
    {
        Session::forget('auth');
        Auth::logout();
        request()->session()->flash('success', 'Logout successfully');
        return redirect()->route('login');
    }
}
