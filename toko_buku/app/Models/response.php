<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class response extends Model
{
    use HasFactory;
    protected $fillable = ["review_id", "admin_id", "content"];

    public function book_review(){
        return $this->belongsTo(book_review::class);
    }
}
