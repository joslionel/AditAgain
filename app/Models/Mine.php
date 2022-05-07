<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mine extends Model
{
    // use SoftDeletes;
    use HasFactory;
    protected $fillable = [
        'mineName',
        'backgroundInfo'
    ];

    // protected $dates = ['deleted_at'];

    public function minephotos()
    {
        return $this->hasMany(minePhoto::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class);
    }

    
}
