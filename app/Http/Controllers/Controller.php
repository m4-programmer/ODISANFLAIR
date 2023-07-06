<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function subcribe(Request $request){
        $request->validate([
            'email' => 'required|email',
        ]);
        //check if email alread exist and do nothibg
        $check = Newsletter::where('email',$request->email)->exists();
        if (!$check){
            Newsletter::create($request->email);
        }
        return back()->with('success','email subscription successful');
    }
    public function unsubscribe(Request $request){

    }
}
