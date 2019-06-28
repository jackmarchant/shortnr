<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ShortURL;

class ShortenController extends Controller
{
    /**
     * Accepts a POST request with a URL to be shortened
     * 
     * @param Request $request
     */
    public function shorten(Request $request)
    {
        $url = ShortURL::create([
            'url' => $request->input('url'),
            'created_at' => new \DateTime(),
            'short' => substr(md5(mt_rand()), 0, 7),
        ]);

        if (! $url) {
            return back()->with('status', 'Unable to create shortened URL');
        }

        return redirect('dashboard')->with('status', 'Shortened URL Created!');
    }

    public function redirect(string $short)
    {
        $shortURL = ShortURL::where('short', $short)->first();

        $shortURL->visits = $shortURL->visits + 1;
        $shortURL->save();

        return redirect()->away($shortURL->url);
    }
}
