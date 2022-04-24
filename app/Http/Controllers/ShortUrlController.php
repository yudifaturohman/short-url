<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShortUrlController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function createUrl(Request $request) {
        $this->validate($request, [
            'url' => 'required'
        ]);

        $builder = new \AshAllenDesign\ShortURL\Classes\Builder();
        $shortURLObject = $builder->destinationUrl(request()->url)->make();
        $shortURL = $shortURLObject->default_short_url;
        
        return back()->with('berhasil','URL kamu sudah pendek menjadi <a href='.$shortURL.' target="_blank"><strong>'.$shortURL.'</strong></a>');
    }
}
