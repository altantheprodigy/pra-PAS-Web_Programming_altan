<?php

namespace App\Http\Controllers;
use App\Models\Pelatih;
use Illuminate\Http\Request;

class PelatihController extends Controller
{
    public function index() 
     {
        return view('pelatih/all', [
            "title" => "pelatih",
            "pelatih" => Pelatih::all()
            
        ]);
    }

    public function see(Pelatih $pelatih){
        return view('pelatih.detil',[
            "title" => "detail",
            "pelatih" => $pelatih
        ]
        );
    }

    public function ubah(Pelatih $pelatih){
        return view('pelatih.ubah',[
            "title" => "detail",
            "pelatih" => $pelatih
        ]
        );
    }
}
