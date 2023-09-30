<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = ['product_id', 'payment_id', 'phone_number', 'total_price', 'payment_evidence', 'status'];

    public function Product()
    {
        return $this->belongsTo(Product::class);
    }

    public function Payment()
    {
        return $this->belongsTo(Payment::class);
    }

    use HasFactory;
}
