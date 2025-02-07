<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthorLoginForm extends Component
{
    public $login_id, $password;

    public function LoginHandler()
    {
        $fieldType = filter_var($this->login_id, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        $this->validate([
            'login_id' => 'required|exists:users,' . $fieldType,
            'password' => 'required|min:5',
        ], [
            'login_id.required' => 'Email or Username is required',
            'login_id.exists' => ucfirst($fieldType) . ' is not registered',
            'password.required' => 'Password is required',
        ]);

        $creds = [$fieldType => $this->login_id, 'password' => $this->password];

        if (Auth::guard('web')->attempt($creds)) {
            $checkUser = User::where($fieldType, $this->login_id)->first();
            if ($checkUser->blocked == 1) {
                Auth::guard('web')->logout();
                return redirect()->route('author.login')->with('fail', 'Your account has been blocked.');
            } else {
                return redirect()->route('author.home');
            }
        } else {
            session()->flash('fail', 'Incorrect Email/Username or Password');
        }
    }

    public function render()
    {
        return view('livewire.author-login-form');
    }
}
