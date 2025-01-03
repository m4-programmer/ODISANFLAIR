<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteTraffic extends Model
{
    use HasFactory;
    protected $fillable = [
        'ip_address',
        'device_type',
        'meta_data'
    ];

    protected $casts = ['meta_data'=> 'json'];
}
