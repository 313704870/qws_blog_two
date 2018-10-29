<?php

namespace App\Models;

class Reply extends Model
{
    protected $fillable = ['content'];

    //和帖子关联
    public function topic(){
        return $this->belongsTo(Topic::class);
    }

    //和用户关联
    public function user(){
        return $this->belongsTo(User::class);
    }
}
