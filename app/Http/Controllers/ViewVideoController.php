<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewVideoController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return back()->with("success", "coming soon");
    }
}
