<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','title','post','likes','tag_id','cover','slug'];
    public function scopeFilter($query,array $filters){
        if ($filters['tag']){
            $query->where('title','like', '%'.request('tags.title').'%');
        }
        if ($filters['search']){
            $query->where('title','like', '%'.request('title').'%')
            ->orWhere('title','like', '%'.request('post').'%');
        }
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function comments(){
        return $this->hasMany(Comment::class);
    }
    public function tags(){
        return $this->belongsTo(Tag::class,'tag_id','id');
    }
}
