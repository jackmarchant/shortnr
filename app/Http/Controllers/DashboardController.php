<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ShortURL;

class DashboardController extends Controller
{
    public function show(Request $reqest)
    {
        $urls = ShortURL::all()->sortByDesc('created_at');
        return view('dashboard', ['urls' => $urls]);
    }
}
