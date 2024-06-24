<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) {
            // Kullanıcı girişi başarılı, yönlendirme yapabilirsiniz
            return redirect()->intended('/dashboard');
        }
    
        // Kullanıcı girişi başarısız, hata mesajı gösterilebilir
        return back()->withErrors([
            'email' => 'Girilen kimlik bilgileri geçersiz.',
        ]);
    }
    


}

