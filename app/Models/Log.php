<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function meal()
    {
        return $this->belongsTo(Meal::class);
    }

    public function foods()
    {
        return $this->belongsToMany(Food::class,'logs_foods','log_id','food_id');
    }

    protected $fillable=[
        'carbs',
        'protein',
        'fiber',
        'fat',
        'energy',
        'meal_id',
        'user_id',
        'date',
        'quantity',
    ];
}
