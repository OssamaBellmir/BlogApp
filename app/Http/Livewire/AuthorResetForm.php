<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User ;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthorResetForm extends Component
{
    public $email, $token, $new_password, $confirm_new_password;

    public function mount()
    {
        $this->email = request('email');
        $this->token = request('token');
    }

    public function ResetHandler()
    {
        $this->validate([
            'email' => 'required|email|exists:users,email',
            'new_password' => 'required|min:5',
            'confirm_new_password' => 'required|same:new_password',
        ], [
            'email.required' => 'The email field is required',
            'email.email' => 'Invalid email address',
            'email.exists' => 'This email is not registered',
            'new_password.required' => 'Enter a new password',
            'new_password.min' => 'Password must be at least 5 characters',
            'confirm_new_password.same' => 'Passwords do not match',
        ]);

        $check_token = DB::table('password_resets')->where([
            'email' => $this->email,
            'token' => $this->token,
        ])->first();

        if (!$check_token) {
            session()->flash('fail', 'Invalid token.');
            return;
        }

        User::where('email', $this->email)->update([
            'password' => Hash::make($this->new_password),
        ]);

        DB::table('password_resets')->where('email', $this->email)->delete();

        session()->flash('success', 'Your password has been updated successfully.');
        return redirect()->route('author.login');
    }

    public function render()
    {
        return view('livewire.author-reset-form');
    }
}
