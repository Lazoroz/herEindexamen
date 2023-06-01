<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\inschrijving;

class AdminController extends Controller
{
    public function index()
    {
        $data = inschrijving::with('user')
                            ->latest()
                            ->get();
       
        return view('admin.dashboard', ['inschrijving' => $data]);
    }
}
