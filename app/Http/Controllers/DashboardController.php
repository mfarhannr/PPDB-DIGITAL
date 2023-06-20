<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('livewire.pages.home-component');
    }
    public function formulir()
    {
        return view('livewire.pages.formulir-component');
    }

    public function nilai()
    {
        return view('livewire.pages.nilai-component');
    }

    public function berkas()
    {
        return view('livewire.pages.berkas-component');
    }

}
