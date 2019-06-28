<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ShortURL;

class DashboardController extends Controller
{
    public function show(Request $reqest)
    {
        return view('dashboard', ['urls' => ShortURL::all()]);
    }
}
