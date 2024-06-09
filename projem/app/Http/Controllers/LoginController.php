<?php
namespace App\Http\Controllers;

global $user_id;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Kullanici;
use Illuminate\Support\Facades\Hash;
class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
{
    $email = $request->input('email');
    $password = $request->input('password');
    

    // Kullanıcıyı e-posta adresine göre bul
    $user = Kullanici::where('email', $email)->first();

    // Kullanıcı var mı ve parola doğru mu kontrol et
    if ($user && Hash::check($password, $user->password)) {
        // Parola doğruysa giris yapiyorum ve gerekli yonlendirme yapiyorum admin mi user mi ? 
        
        if ($user->role === 'admin') {
            return redirect()->route('admin');
        } else {
            
            return redirect()->route('user.dashboard');
        }
    } else {
        // Kullanıcı yok veya parola yanlışsa tekrar login ekranindayim
        return redirect()->route('login')->with('error', 'E-posta veya şifre hatali.');
    }
}
}

?>