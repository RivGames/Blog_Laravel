<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BaseController extends Controller
{

    public function get2Day()
    {
        $dt = Carbon::now();//текущая дата
        return $dt->format('l jS \\of F Y');//формат корректный
    }
}
