<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable=['name'];

    public function posts(){
        return $this->belongsToMany(Post::class);
    }

    public function hasTag($tagId){
        return in_array($tagId, $this->tags->pluck('id')->toArray());
    }
    
}
