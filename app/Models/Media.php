<?php

namespace App\Models;

use Cohensive\OEmbed\Facades\OEmbed;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Media extends Model
{
    use HasFactory;
    const VIDEO = "video";
    const AUDIO = "audio";

    protected $guarded= [

    ];

    public function scopeVideo(Builder $q): void
    {
        $q->where("type", self::VIDEO);
    }

    public function scopeAudio(Builder $q): void
    {
        $q->where("type", self::AUDIO);
    }

    public function scopeActive(Builder $q, $active = true): void
    {
        $q->where("status", $active);
    }

    public function scopeCategory(Builder $q, $value): void
    {
        $q->where("category", $value);
    }

    //accessors
    public function getUrlAttribute($value)
    {
        $embed = OEmbed::get($value);
        if($embed && $this->type == self::VIDEO)
        {
            return $embed->html(['width' => 700]);
        }
        return $value;
    }
}
