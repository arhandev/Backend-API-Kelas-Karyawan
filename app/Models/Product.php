<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'name',
        'harga',
        'stock',
        'description',
        'image_url',
        'harga_diskon',
        'category',
        'is_diskon',
        'user_id',
    ];

    protected $casts = [
        'is_diskon' => "boolean",
    ];

    protected $appends = [
        'harga_display',
        'harga_diskon_display',
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getHargaDisplayAttribute()
    {
        return "Rp. " . number_format($this->harga, 0, ',', '.');
    }

    public function getHargaDiskonDisplayAttribute()
    {
        return $this->is_diskon ? "Rp. " . number_format($this->harga_diskon, 0, ',', '.') : "Rp. 0";
    }
}
