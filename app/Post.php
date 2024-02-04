<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'body',
        ];
    
    public function getPaginateByLimit(int $limit_count = 10)
    {
        return $this->orderby('updated_at', 'DESC')->paginate($limit_count);
    }
}
