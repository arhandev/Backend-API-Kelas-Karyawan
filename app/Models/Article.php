<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table = 'articles';

    protected $fillable = [
        'name',
        'content',
        'image_url',
        'highlight',
        'user_id',
    ];

    protected $casts = [
        'highlight' => "boolean",
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
