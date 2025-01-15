<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Livewire\Attributes\Title;


#[Title(' login - HealthSkin')]
class LoginPage extends Component
{
    public $email;
    public $password;

    public function save(){
        $this->validate([
            'email' => 'required|email|exists:users,email|max:255',
            'password' => 'required|min:5|max:255'
        ]);

        if(!auth()->attempt(['email' => $this->email, 'password' => $this->password])) {
            session()->flash('error','Invalid credentials');
            return;
        }

        return redirect()->intended();
    }
    

    public function render()
    {
        return view('livewire.auth.login-page');
    }
}
