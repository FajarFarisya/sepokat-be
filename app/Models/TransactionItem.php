<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionItem extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'users_id',
        'products_id',
        'transactions_id',
        'quantity',
    ];

    public function product(){
        return $this->hasOne(Product::class, 'id', 'products_id');
    }

    public function transaction(){
        return $this->hasOne(Transaction::class, 'id', 'transactions_id');
    }

    public function user(){
        return $this->hasOne(User::class, 'id', 'users_id');
    }
}
