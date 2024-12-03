<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','title','post','likes','tag_id','cover','slug','status'];
    public function scopeFilter($query, array $filters)
    {
        if (isset($filters['q'])) {
            $query->where(function ($q) use ($filters) {
                $q->where('title', 'like', '%' . $filters['q'] . '%')
                    ->orWhere('slug', 'like', '%' . $filters['q'] . '%')
                    ->orWhere('post', 'like', '%' . $filters['q'] . '%')
                    ->orWhereHas('tags', function ($query) use ($filters) {
                        $query->where('title', 'like', '%' . $filters['q'] . '%');
                    });
            });
        }

        if (isset($filters['date'])) {
            switch ($filters['date']) {
                case 'today':
                    $query->whereDate('created_at', now()->toDateString());
                    break;
                case 'last_week':
                    $query->whereBetween('created_at', [now()->subWeek(), now()]);
                    break;
                case 'last_month':
                    $query->whereBetween('created_at', [now()->subMonth(), now()]);
                    break;
                // Add more cases for other date options
            }
        }
        if (isset($filters['category'])) {
            $query->where('category', $filters['category']);
        }
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function media()
    {
        return $this->hasOne(Media::class);
    }
    public function comments(){
        return $this->hasMany(Comment::class);
    }
    public function tags(){
        return $this->belongsTo(Tag::class,'tag_id','id');
    }

    public function library_tag()
    {
        return $this->belongsTo(LibraryTags::class,'library_tags_id');
    }
}
