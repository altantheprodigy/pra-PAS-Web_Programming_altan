<?php

namespace App\Http\Controllers;
use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index() 
     {
        return view('player/home', [
            "title" => "home",
            "pemain" => Player::all()
            
        ]);
    }

    public function show(Player $pemain){
        return view('player.detail',[
            "title" => "detail",
            "pemain" => $pemain
        ]
        );
    }


    public function lihat(Player $pemain){
        return view('player.edit',[
            "title" => "edit",
            "pemain" => $pemain
        ]
        );
    }
}
