<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiconController extends Controller
{
    public function policy() {
        return view('sicon.policy');
    }

    public function print() {
        return view('sicon.print');
    }


}
