<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function logs()
    {
        return $this->belongsToMany(Log::class,'logs_foods','food_id','log_id');
    }

    protected $fillable=[
        "image",
        "item",
        "serving_size",
        "serving_unit",
        "net_weight",
        "energy",
        "carbohydrate",
        "fiber",
//        "no_of_carbs_exchange",
        "protein",
        "fat",
        "more_info",
        "source",
        "unpeeled_weight",
        "group_id",
    ];

    protected $hidden=[
        'created_at',
        'updated_at',
    ];
}
