<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public mixed $user_id;
    protected $fillable = [
        'user_id','title','content','published','published_at',
    ];


    protected function casts(): array
    {
        return [
            'published'=> 'boolean',
            'published_at' => 'datetime',
        ];
    }

}
