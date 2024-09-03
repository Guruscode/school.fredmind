<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index ()
    {
        return view('pages.index');
    }
    public function school() 
    {
        return view('pages.school');
    }
    public function aproach() 
    {
        return view('pages.approach');
    }
    public function resources() 
    {
        return view('pages.resources');
    }
    
    
    public function engineering() 
    {
        return view('pages.schools.engineering');
    }
    public function marketing() 
    {
        return view('pages.schools.marketing');
    }
    
    public function products ()
    {
        return view('pages.schools.product');
    }
    public function why ()
    {
        return view('pages.why');
    }
    public function data ()
    {
        return view('pages.index');
    }
    public function business ()
    {
        return view('pages.schools.business');
    }
    public function creative ()
    {
        return view('pages.index');
    }

    public function term ()
    {
        return view('pages.index');
    }
 
    public function privacy ()
    {
        return view('pages.index');
    }
 
    public function scholarship ()
    {
        return view('pages.index');
    }

    public function career ()
    {
        return view('pages.career');
    }
 
    public function blog ()
    {
        return view('pages.index');
    }
    public function faq ()
    {
        return view('pages.faq');
    }
 
    
    public function javascript ()
    {
        return view('pages.index');
    }
 
}
