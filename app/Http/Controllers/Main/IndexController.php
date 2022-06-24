<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class IndexController extends Controller
{
    public function __invoke(){
        $dt = Carbon::now();
        $today_day = $dt->format('l jS \\of F Y');
        $posts = Post::all();
        return view('main.index',compact('today_day','posts'));
    }
}
