<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'subject',
        'title',
        'description',
        'experience',
        'place',
        'price',
        'phone',
        'image',
    ];
    
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
