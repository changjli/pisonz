<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'game_id'];

    public function Game()
    {
        return $this->belongsTo(Game::class);
    }

    public function Product()
    {
        return $this->hasMany(Product::class);
    }

    use HasFactory;
}
