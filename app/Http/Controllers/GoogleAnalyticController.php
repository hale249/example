<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GoogleAnalyticController extends Controller
{
    public function index(Request $request)
    {
        info('request google' . json_encode($request->all()));

        return $request->json('Event google analytics');
    }
}
