<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Urun;

class UrunController extends Controller
{
    public function index()
    {
        $urunler = Urun::all();
        return view('urunler', compact('urunler'));
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'isim' => 'required|string|max:255',
        ]);

        
        Urun::create([
            'isim' => $request->isim,
        ]);

        return redirect()->route('urun_kaydi')->with('success', 'Ürün başarıyla kaydedildi!');
    }


    public function urun_kaydi_index()
    {
        $urunler = Urun::all();
        return view('urun_kaydi', compact('urunler'));
    }


    public function urun_edit(Urun $urun)
    {
        return view('urun_edit', compact('urun'));
    }

    public function urun_update(Request $request, Urun $urun)
    {
        $request->validate([
            'isim' => 'required|string|max:255',
            
        ]);

        $urun->update($request->all());
        return redirect()->route('urun_kaydi')->with('success', 'Ürün başarıyla güncellendi.');

    }

    public function urun_delete(Urun $urun)
    {
        $urun->delete();
        return redirect()->back()->with('success', 'Ürün başarıyla silindi.');
    }
}
