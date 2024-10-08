<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Levels extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'nama_level',
    ];

    protected $date = ['deleted_at'];

    public function user()
    {
        return $this->hasMany(User::class, 'id_level');
    }
}
