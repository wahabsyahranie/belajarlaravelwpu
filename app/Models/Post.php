<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';

    protected $fillable = [
        'slug', 'title', 'author', 'body'
    ];

    //Menggunakan Eager Loading di Model
    protected $with = ['user', 'category'];

    public function user() : BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function category() : BelongsTo {
        return $this->belongsTo(CategoryPost::class);
    }

    public function scopeFilter(Builder $query, array $filters) : void {

        $query->when ($filters['search'] ?? false, fn ($query, $search) =>
            $query->where('title', 'like', '%' . $search . '%')
        );

        $query->when($filters['category'] ?? false, fn ($query, $category) =>
            $query->whereHas('category', fn ($query) => $query->where('slug', $category))
        );

        $query->when($filters['author'] ?? false, fn ($query, $author) =>
            $query->whereHas('user', fn ($query) => $query->where('username', $author))
        );
    }
}
