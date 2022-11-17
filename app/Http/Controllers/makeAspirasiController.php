<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Aspirasi;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class makeAspirasiController extends Controller
{
    public function create() {
        return view('buat-aspirasi',[
            'categories' => Kategori::all()
        ]);
    }

    public function store(Request $request) {
        $aspirationData = $request->validate([
            'header' => 'required',
            'body' => 'required',
            'category_id' => 'required',
            'status' => [0]
        ]);

        $aspirationData['sender_id'] = auth()->user()->id;

        Aspirasi::create($aspirationData);

        return redirect('home');
        // dd($aspirationData);
    }

    public function show() {
        return view('aspirasi',[
            'aspiration' => Aspirasi::all()
        ]);
    }
     
}