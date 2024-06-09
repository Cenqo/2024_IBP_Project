<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Text;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
class MesajController extends Controller
{
  
    public function store(Request $request)
    {
        // Oturum açmamış kullanıcılar için koruma
        $request->validate([
            'texts' => 'required',
            'sender' => 'required'
        ]);

        Text::create([
            'texts' => $request->texts,
            'sender' => $request->sender,
            
        ]);

        return redirect()->back()->with('success', 'Mesaj başariyla gönderildi.');
    }

    



    public function gidenmesajlar()
    {
        $texts = Text::orderBy('id')->get();
        return view('mesajgonder', compact('texts'));
    }




    
    
    public function markAsRead($id)
    {
        $message = Text::findOrFail($id);
        $message->update(['okundu_at' => now()]);
        
        return redirect()->back()->with('success', 'Mesaj okundu olarak işaretlendi.');
    }
    
   
}
?>