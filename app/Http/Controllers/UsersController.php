<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{

    /**
     * Method index
     * This will redirect to login page
     * @param Request $request [explicite description]
     * @author AlokDas
     * @return void
     */
    // public function index(Request $request)
    // {
    //     return view('');
    // }
    /**
     * Method userLogin
     * Login part will be done here
     * @param Request $request [explicite description]
     * @author AlokDas
     * @return void
     */
    public function userLogin(Request $request)
    {
        $request->validate([
            'email'    => 'required',
            'password' => 'required',
        ], [
            'email.required'    => 'Please enter the email',
            'password.required' => 'Please enter the password',
        ]);

        try {
            $user = User::where('email', $request->email)->where('type', $request->type);
            if ($user->exists()) {
                $user = $user->first();
                if (Hash::check($request->password, $user->password)) {
                    Auth::login($user);
                    session()->put('user', $user);

                    // dd([Auth::user(), $request->session()->all()]);

                    if ($request->type == 1) {
                        return redirect()->route('home');
                    } else {
                        return redirect()->route('admin.home');
                    }
                } else {
                    return redirect()->route('welcome');
                }
            } else {
                return redirect()->route('welcome');
            }
        } catch (\Exception $e) {
            $data['data']    = [];
            $data['message'] = $e->getMessage();
            return response($data, 500);
        }
    }
}
