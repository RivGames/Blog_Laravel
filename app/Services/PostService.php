<?php

namespace App\Services;

use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostService
{
    public function store($data){
        try {
            $tag_ids = $data['tag_ids'];
            unset($data['tag_ids']);
            $data['main_image'] = Storage::disk('public')->put('images/', $data['main_image']);
            $post = Post::firstOrCreate($data);
            $post->tags()->attach($tag_ids);
        }catch (\Exception $e){
            abort(404);
        }
    }
    public function update($data,$post)
    {
        try {
            DB::beginTransaction();
            $tag_ids = $data['tag_ids'];
            unset($data['tag_ids']);
            $data['main_image'] = Storage::disk('public')->put('images', $data['main_image']);
//        dd($data);
            $post->update($data);
            $post->tags()->sync($tag_ids);
            DB::commit();
        }catch (\Exception $e){
            DB::rollBack();
            abort(404);
        }
    }
}
