<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

class EditController extends BaseController
{
    public function __invoke(Post $post)
    {
        $tags = Tag::all();
        $categories = Category::all();
        return view('admin.post.edit',compact('post','tags','categories'));
    }
}
