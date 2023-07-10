<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;
//
//    public function foods()
//    {
//        return $this->belongsToMany(Food::class,'plans_foods','plan_id','food_id');
//    }

    public function meal()
    {
        return $this->belongsTo(Meal::class);
    }

    public function food()
    {
        return $this->belongsTo(Food::class);
    }

    protected $fillable=[
        'food_id',
        'meal_id',
        'user_id',
        'quantity',
    ];
}
