<?php

namespace App\Models;


use Carbon\Carbon;
use App\Models\CategoryBlog;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'description',
        'content',
        'photo',
        'accroche',

    ];

    /**
     * Get the category_blogs that owns the Blog
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function blog()
    {
        return $this->belongsTo(CategoryBlog::class, 'category_blog_id');
    }


}