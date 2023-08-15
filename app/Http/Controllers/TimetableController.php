<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Timeschedule;

class TimescheduleController extends Controller
{
    public function index(Timeschedule $timeschedule)
    {
        return view('timeschedule.index')->with(['posts' => $timeschedule->getByTimeschedule()]);
    }
    //
}