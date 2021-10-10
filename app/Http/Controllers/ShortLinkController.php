<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShortLink;

class ShortLinkController extends Controller
{
    public function shortenLink($code)
    {
        $find = ShortLink::where('code', $code)->first();
        
        if($find){
            return redirect($find->link);
        }else{
            return view('404');
        }
        
    }
}
