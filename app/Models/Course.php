<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Checkout;
use Auth;

class Course extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['title','price'];

    public function getIsRegisteredAttribute() {
        if (!Auth::check()) {
            return false;
        }

        return Checkout::whereCourseId($this->id)->whereUserId(Auth::id())->exists();
    }
}
