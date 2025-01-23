<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisitorsController extends Controller
{
    public function display()
    {
        $visitors = Visitors::all();
        
        return view('display', compact('visitors'));
    }
}