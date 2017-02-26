<?php

namespace App\Http\Controllers;
use App\Mahasiswa;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $data  =Mahasiswa::all();
           return View ('home')->with('mhs', $data);
    }
}
