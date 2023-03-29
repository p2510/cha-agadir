<?php

namespace App\Models;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CategoryBlog extends Model
{
    use HasFactory;
    protected $fillable=['name'];

    /**
     * Get all of the blog for the CategoryBlog
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function blogs()
    {
        return $this->hasMany(Blog::class, 'category_blog_id', 'id');
    }
}