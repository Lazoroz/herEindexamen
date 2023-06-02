<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\inschrijving;
use Carbon\Carbon;

class IndexController extends Controller
{
    public function index()
    {
        $EndDate = Carbon::createFromFormat('m/d/Y H:i:s', '06/02/2023 09:30:00', 'Europe/Amsterdam');
        $nowDate = Carbon::now('Europe/Amsterdam');

        // VERANDER HET NOG NAAR GT!!!
        $result = $nowDate->gte($EndDate);

        $count = inschrijving::with('user')->count();
       
        
        return view('welcome', [
            'EindDatum' => $result,
            'count' => $count,
        ]);
    }
}
