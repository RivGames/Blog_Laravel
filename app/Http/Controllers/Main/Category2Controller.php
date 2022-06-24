<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Carbon\Carbon;

class Category2Controller extends Controller
{
    public function __invoke()
    {
        $dt = Carbon::now();
        $today_day = $dt->format('l jS \\of F Y');
        $posts = Post::query()->where('category_id',2)->get();
        return view('main.category_cpp',compact('posts','today_day'));
    }
}
