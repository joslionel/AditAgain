<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'headline',
        'facebook',
        'youtube',
        'url',
        'image_url',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function photo()
    {
        return $this->hasOne(Photo::class);
    }
}
