<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'name',
        'price',
        'price_promo',
        'detail',
        'image'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
