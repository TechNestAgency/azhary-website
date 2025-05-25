<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\Translatable\HasTranslations;

class Article extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'excerpt',
        'image',
        'author_id',
        'status',
        'views'
    ];

    public $translatable = ['title', 'content', 'meta_description', 'meta_keywords'];

    protected $casts = [
        'status' => 'boolean',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Scope a query to only include published articles.
     */
    public function scopePublished($query)
    {
        return $query->where('status', true);
    }

    /**
     * Get the author that owns the article.
     */
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }


} 