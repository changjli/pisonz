<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'category_id', 'price', 'quantity', 'notes'];

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }

    public function Transaction()
    {
        return $this->hasMany(Transaction::class);
    }

    use HasFactory;
}
