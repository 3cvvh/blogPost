<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsTo;

class Komens extends Model
{
    /** @use HasFactory<\Database\Factories\KomensFactory> */
    use HasFactory;
    public function Blog():belongsTo
    {
        return $this->belongsTo(Blog::class, 'blogposts_id', 'id');
    }
    public function User():belongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
