<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoryController extends BaseController
{
    public function __invoke($category)
    {
        $today = $this->get2Day();
        $posts = Post::where('category_id',$category)->paginate(2);
        return view('main.category',compact('posts','today'));
    }
}
