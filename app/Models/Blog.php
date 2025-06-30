<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Blog extends Model
{
    /** @use HasFactory<\Database\Factories\BlogFactory> */
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'blogposts';
    public function author():BelongsTo
    {
        return $this->belongsTo(User::class,'author_id');
    }
    public function cate():BelongsTo
    {
        return $this->belongsTo(category::class,'cate_id');
    }
}
