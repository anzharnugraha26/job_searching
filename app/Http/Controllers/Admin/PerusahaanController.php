<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PerusahaanController extends Controller
{
    public function index(){
        return view('page.perusahaan.dashboard');
    }
}
