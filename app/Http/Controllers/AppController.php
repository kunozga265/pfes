<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function isApi(Request $request)
    {
        //get cookie object
        $CSRF_TOKEN=$request->cookie();
        return !(count($CSRF_TOKEN) == 0);
    }

}
