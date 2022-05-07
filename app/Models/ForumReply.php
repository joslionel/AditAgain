<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForumReply extends Model
{
    use HasFactory;
    public function postparent()
    {
        return $this->hasOne(ForumPost::class);
    }
}
