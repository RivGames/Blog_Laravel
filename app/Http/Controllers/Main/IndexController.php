<?php

namespace App\Http\Controllers\Main;

use App\Models\Post;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $today = $this->get2Day();
        $posts = Post::paginate(2);
        return view('main.index', compact('today', 'posts'));
    }
}
