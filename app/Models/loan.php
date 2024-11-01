<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class loan extends Model
{
    protected $fillable = [
        'member_id',
        'book_id',
        'borrow_date',
        'return_date',
        'status',
    ];

    public function member() {
        return $this->belongsTo(Member::class, 'member_id');
    }

    public function book() {
        return $this->belongsTo(book::class, 'book_id');
    }
}
