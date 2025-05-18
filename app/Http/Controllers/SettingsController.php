<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function pengaturan(){
        $title = "Pengaturan";
        return view('pengaturan', compact('title'));
    }
}
