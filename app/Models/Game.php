<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = ['name', 'image'];

    public function Category()
    {
        return $this->hasMany(Category::class);
    }

    use HasFactory;
}
