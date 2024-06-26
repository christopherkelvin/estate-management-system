<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class estate extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class,'id');
    }
    // protected $fillable = ['Location', 'NumberOfBeds', 'NumberOfBathrooms','Description', 'SellingPrice', 'Cartegory', 'Area', 'photo'];
}
