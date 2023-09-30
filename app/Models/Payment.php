<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = ['method', 'account_number', 'account_name'];

    public function Transaction()
    {
        return $this->hasMany(Transaction::class);
    }

    use HasFactory;
}
