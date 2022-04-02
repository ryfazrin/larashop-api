<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BookCategory extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table = 'book_category';
    protected $fillable = [
        'book_id', 'category_id', 'invoice_member', 'status'
    ];
}
