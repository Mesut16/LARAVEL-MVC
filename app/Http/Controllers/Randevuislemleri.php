<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Randevuislemleri extends Controller
{
    public function randevu()
    {
        return view("frontend/randevuapp");
    }

    public function hakkinda()
    {
        return view('frontend/hakkinda');
    }

    public function tedavi()
    {
        return view('frontend/tedaviler');
    }

    public function tedavi1()
    {
        return view('frontend/tedavi1');
    }
    public function tedavi2()
    {
        return view('frontend/tedavi2');
    }
    public function tedavi3()
    {
        return view('frontend/tedavi3');
    }
    public function tedavi4()
    {
        return view('frontend/tedavi4');
    }
    public function tedavi5()
    {
        return view('frontend/tedavi5');
    }
    public function tedavi6()
    {
        return view('frontend/tedavi6');
    }
    public function iletisim()
    {
        return view('frontend/iletisim');
    }

}
