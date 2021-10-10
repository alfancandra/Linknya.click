<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AutentikasiController extends Controller
{
    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        
        return redirect('/')->with(['success' => 'Success Logout!']);
    }
}
