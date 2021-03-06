<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'category_id','user_id', 'value'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
