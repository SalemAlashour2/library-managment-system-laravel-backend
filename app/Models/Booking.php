<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Booking extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable=[
        'user_id',
        'book_id',
        'return_date'
    ];

    function book() : BelongsTo {
        return $this->belongsTo(Books::class,'book_id','id');
    }

    function user() : BelongsTo {
        return $this->belongsTo(User::class);
    }
}