<?php

namespace App\Models;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function movies(): BelongsToMany
    {
        return $this->belongsToMany(Movie::class, 'category_movies');
    }
}
