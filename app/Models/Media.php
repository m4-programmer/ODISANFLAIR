<?php

namespace App\Models;

use Cohensive\OEmbed\Facades\OEmbed;
use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Cache;

class Media extends Model
{
    use HasFactory;
    const VIDEO = "video";
    const AUDIO = "audio";

    protected $guarded= [];

    protected $casts = ["meta_data" => "json"];

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
        try {
            // First, try to retrieve the cached result.
            if (Cache::has($value)) {
                return Cache::get($value);
            }

            // If not cached, fetch and embed the HTML.
            $embed = OEmbed::get($value);
            if ($embed && $this->type == self::VIDEO) {
                $embedHtml = $embed->html(['width' => 700]);

                // Cache the embedded HTML for future use.
                Cache::put($value, $embedHtml, now()->addMinutes(30));

                return $embedHtml;
            }
        }
        catch (Exception $e) {
            // Log the error if needed
             logger()->error("Failed to get embed code: " . $e->getMessage());
             return null;
        }

        // Return original URL if embedding or caching fails.
        return $value;
    }
}
