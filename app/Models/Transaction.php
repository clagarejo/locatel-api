<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transaction';
    protected $guarded = [];

    public function transactionType() {
        return $this->belongsTo(TransactionType::class, 'transaction_type_id');
    }

    public function account() {
        return $this->belongsTo(Account::class, 'transaction_id');
    }

}
