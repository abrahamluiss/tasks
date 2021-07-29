<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'text',
        'id_user'
    ];


    public function user()
    {
        return $this->hasMany(User::class);
    }
}
