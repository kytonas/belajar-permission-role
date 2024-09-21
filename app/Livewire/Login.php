<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;


#[Layout('layouts.guest')]
class Login extends Component
{

    public $form = [
        'email' => '',
        'password' => '',
    ];

    public function login()
    {
        $this->validate([
            'form.email' => 'required|email',
            'form.password' => 'required',
        ]);

        if (Auth::attempt(['email' => $this->form['email'], 'password' => $this->form['password']])) {
            session()->regenerate();

           $user = Auth::user();
            // Cek role pengguna dan redirect sesuai role
            if ($user->hasRole('admin')) {
                return redirect()->route('admin.dashboard'); // Redirect ke halaman admin
            } elseif ($user->hasRole('penulis')) {
                return redirect()->route('penulis.dashboard'); // Redirect ke halaman penulis
            }
        } else {
            // Jika login gagal, tampilkan pesan error
            $this->addError('form.email', 'Email atau password salah.');
        }
    }
    public function render()
    {
        return view('livewire.login');
    }
}
