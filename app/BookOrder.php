<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BookOrder extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table = 'book_order';
    protected $fillable = [
        'book_id', 'order_id', 'quantity'
    ];
}
