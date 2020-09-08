<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $email;
    public $password;
    
    /**
     * login
     *
     * @return void
     */
    public function login()
    {
        $this->validate([
            'email'     => 'required|email',
            'password'  => 'required'
        ]);

        if(Auth::attempt(['email' => $this->email, 'password'=> $this->password])) {

            return redirect()->route('admin.dashboard');

        } else {
            session()->flash('error', 'Alamat Email atau Password Anda salah!.');
            return redirect()->route('auth.login');
        }
    }
    
    /**
     * render
     *
     * @return void
     */
    public function render()
    {
        return view('livewire.auth.login');
    }
}