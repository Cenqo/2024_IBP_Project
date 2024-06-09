<?php
namespace App\Http\Controllers;
use App\Models\Kullanici;
use App\Models\Duyurular;
use App\Models\Text;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function index()
    {
        $users = Kullanici::orderBy('id')->get();
        $texts = Text::orderBy('id')->get();
        return view('admin', compact('users','texts'));
    }


    public function gelenMesajlar()
{
    $texts = Text::orderBy('id')->get();
    return view('gelenmesaj', compact('texts'));
}


    public function deleteUser($id)
{
    $user = Kullanici::findOrFail($id);
    $user->delete();

    return redirect()->route('admin')->with('success', 'User deleted successfully');
}

    
    public function edit($id)
    {
        $user = Kullanici::findOrFail($id);
        return view('edit', ['user' => $user]);
    }

    // Kullanıcıyı güncelleme işlemi
    public function update(Request $request, $id)
    {
        $user = Kullanici::findOrFail($id);
        
        
        if ($request->filled('password')) {
            $user->password = bcrypt($request->input('password'));
        }
        
        
        $user->name = $request->input('name');
        $user->email = $request->input('email');
    
        
        $user->save();
    
        
        return redirect()->route('admin')->with('success', 'Kullanici başariyla güncellendi.');
    }
    

    public function createDuyuru(Request $request)
{
    $request->validate([
        'baslik' => 'required',
        'icerik' => 'required'
    ]);

    Duyurular::create([
        'baslik' => $request->baslik,
        'icerik' => $request->icerik
    ]);

    return redirect()->back()->with('success', 'Mesaj başariyla gönderildi.');


   


}

    // DUYURULAR
    public function yapilanDuyurular()
    {
        $duyurular = Duyurular::orderBy('id')->get();
        return view('duyurugonder', compact('duyurular'));
    }


    public function duyuru_edit($id)
    {
        $duyuru = Duyurular::findOrFail($id);
        return view('duyuru_edit', ['duyuru' => $duyuru]);
    }

    public function duyuru_update(Request $request, $id)
    {
        $duyuru = Duyurular::findOrFail($id);

        $validatedData = $request->validate([
            'baslik' => 'required|string|max:255',
            'icerik' => 'required|string',
        ]);

        $duyuru->update($validatedData);

        return redirect()->route('duyurugonder')->with('success', 'Duyuru başarıyla güncellendi.');
    }

    public function duyuru_destroy($id)
    {
        $duyuru = Duyurular::findOrFail($id);
        $duyuru->delete();

        return redirect()->route('duyurugonder')->with('success', 'Duyuru başarıyla silindi.');
    }


    

   
    

}

?>