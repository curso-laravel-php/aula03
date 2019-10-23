<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForeverAloneController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return "<h1> I feel lonely... </h1>";
    }
}
