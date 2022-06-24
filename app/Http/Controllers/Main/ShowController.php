<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Post $post)
    {
        $dt = Carbon::now();
        $today_day = $dt->format('l jS \\of F Y');
        return view('main.show', compact('post','today_day'));
    }
}
