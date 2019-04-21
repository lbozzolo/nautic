<?php

namespace Nautic\Http\Controllers;

use Nautic\Models\Category;
use Nautic\Models\Work;
use Nautic\Models\Noticia;
use Nautic\Models\Servicio;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
 
        $data = '';
        return view('home')->with($data);
    }
}
