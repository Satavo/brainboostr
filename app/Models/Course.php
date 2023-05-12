<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'price',
        'description',
        'author',
        'user_id',
        'image',
    ];
    
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
