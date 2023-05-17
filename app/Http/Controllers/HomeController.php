<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Habbo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $habbos = Habbo::all();
        $faqs = Faq::all();
    
        return view('welcome', compact('habbos', 'faqs'));
    }
}
