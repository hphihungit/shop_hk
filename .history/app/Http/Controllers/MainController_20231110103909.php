<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function indexUser() {
        return view('main', [
            'title' => 'Shop HK',

        ]);
    }
}
