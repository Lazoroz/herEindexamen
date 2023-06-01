<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\inschrijving;
use Carbon\Carbon;

class IndexController extends Controller
{
    public function index()
    {
        $EndDate = Carbon::now()->addHours(9);
        $nowDate = Carbon::now();

        // VERANDER HET NOG NAAR GT!!!
        $result = $nowDate->lt($EndDate);

        $count = inschrijving::with('user')->count();

        print_r($count);
        
        return view('welcome', [
            'isTime' => $result,
            'count' => $count,
        ]);
    }
}
