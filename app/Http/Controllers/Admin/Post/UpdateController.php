<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request,Post $post)
    {
        $data = $request->validated();
        $this->service->update($data,$post);
        return redirect()->route('admin.post.show',$post['id']);
    }
}
