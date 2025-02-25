<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LibraryTags extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'title','status','slug'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function posts(){
        return $this->hasMany(Post::class);
    }
}
