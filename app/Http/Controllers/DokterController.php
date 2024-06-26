<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DokterController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $photo= $user->avatar;
        if ($photo != null) {
            $photo = 'storage/'.$user->avatar;
            return view('dokter.dashboard', compact('user','photo'));
        } 
        $photo = '/images/defaultprofile.png';
        return view('dokter.dashboard', compact('user','photo'));
    }
}
