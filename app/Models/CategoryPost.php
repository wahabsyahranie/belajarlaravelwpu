<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CategoryPost extends Model
{
    use HasFactory;
    
    protected $table = 'category_posts';
    protected $fillable = ['name', 'slug'];

    public function posts() : HasMany {
        return $this->hasMany(Post::class, 'category_id');
    }
}
