<?php
namespace App\Http\Controllers;
use App\Models\Kullanici;
use App\Models\Duyurular;
use Illuminate\Support\Facades\Hash;
use App\Models\Mesajlar;
use App\Models\Text;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $users = Kullanici::orderBy('id')->get();
        $duyurular = Duyurular::orderBy('created_at', 'desc')->get();
    
        return view('user', compact('users', 'duyurular'));
    }


    public function gelenDuyurular()
    {
        $duyurular = Duyurular::orderBy('id')->get();
        return view('duyurular', compact('duyurular'));
    }


}
?>