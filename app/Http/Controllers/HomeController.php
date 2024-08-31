<?php

namespace App\Http\Controllers;

use App\Models\Songs;
use App\Models\Albums;
use Illuminate\Http\Request;

class HomeController extends Controller
{ 
    public function home() {
        
        $latestAlbums = Albums::orderBy('created_at', 'desc')
        ->take(2) 
        ->get();
        return view('client.index', compact('latestAlbums'));
    }
    public function albums()  {
        return view('client.albums-store');
    }
    public function blog() {
        return view('client.blog');
    }
    public function contact() {
        return view('client.contact');
    }
    public function element() {
        return view('client.elements');
    }
    public function event() {
        return view('client.event');
    }
}
