<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Link;

class LinkController extends Controller
{
    public function index() {
        
        return view('main');
    }

    public function store(Request $request) {

        $shortcode = Str::random(4);

        $request->validate([
            'url' => 'required|url',
        ]);

        $link = new Link;
        $link->url = $request->url;
        $link->shortcode = $shortcode;
        $link->save();

        return view('success', ['shortcode' => $shortcode]);
    }

    public function show($shortcode) {

        $link = Link::where('shortcode', $shortcode)->first();

        $link->clicks ++;
        $link->save();

        return redirect($link->url);
    }
}
