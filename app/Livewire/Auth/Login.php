<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Rule;
use Livewire\Component;

class Login extends Component
{
    #[Rule(['required', 'email', 'max:255'])]
    public $email;
    #[Rule(['required', 'max:255'])]
    public $password;
    #[Rule(['bool'])]
    public bool $remember = false;

    public function login()
    {
        $this->validate();

        if (!auth()->attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            return $this->addError('email','Usuario ou senha incoretos');
        }

        return redirect()->route('index');
    }

    public function render()
    {
        return view('livewire.auth.login')
            ->layout('components.layouts.guest');
    }
}
