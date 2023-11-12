<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Register extends Component
{
    #[Rule(['required'])]
    public $name;
    #[Rule(['required', 'email'])]
    public $email;
    #[Rule(['required'])]
    public $password;

    public function register()
    {
        $this->validate();

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
        ]);

        auth()->login($user);
        return redirect()->route('index');
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
