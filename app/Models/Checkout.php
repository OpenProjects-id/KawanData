<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Checkout extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['user_id','course_id','handphone_number','is_join'];

    // public function setExpiredAttribute($value) {
    //     $this->attribute['expired'] = date('Y-m-t', strtotime($value));
    // }

    public function Course(): BelongsTo {
        return $this->belongsTo(Course::class);
    }

    public function User(): BelongsTo {
        return $this->belongsTo(User::class);
    }
    
}
