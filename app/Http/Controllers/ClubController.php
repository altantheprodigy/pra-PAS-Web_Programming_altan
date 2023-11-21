<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Club;
class ClubController extends Controller
{
    public function index() 
     {
        return view('club/allclub', [
            "title" => "club",
            "club" => Club::all()
            
        ]);
    }

    public function detailclub(Club $club) 
     {
        return view('club/detailclub', [
            "title" => "detail club",
            "club" => $club
            
        ]);
    }
}
