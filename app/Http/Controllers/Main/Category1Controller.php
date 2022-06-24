<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Carbon\Carbon;

class Category1Controller extends Controller
{
    public function __invoke()
    {
        $dt = Carbon::now();
        $today_day = $dt->format('l jS \\of F Y');
        $posts = Post::query()->where('category_id',1)->get();
        return view('main.category_php',compact('posts','today_day'));
    }
}
