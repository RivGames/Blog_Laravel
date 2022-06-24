<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'title','content','main_image','category_id','user_id',
    ];
    public function tags(){
        return $this->belongsToMany(Tag::class,'post_tags','post_id','tag_id');
    }
    public function category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }
    public function author(){
        return $this->belongsTo(User::class,'id','user_id');
    }

}
