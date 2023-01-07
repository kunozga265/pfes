<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    public function foods()
    {
        return $this->hasMany(Food::class);
    }

    protected $fillable=[
        'name',
        'image'
    ];

    protected $hidden=[
        'created_at',
        'updated_at',
    ];
}
