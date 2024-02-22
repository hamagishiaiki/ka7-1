<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    public function getPaginateByLimit(int $limit_count = 10)
    {
        return $this::with('category')->orderby('updated_at', 'DESC')->paginate($limit_count);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    protected $fillable = [
        'title',
        'body',
        'category_id'
    ];
}
