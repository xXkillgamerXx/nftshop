<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;
    protected $fillable =[
        'user_id',
        'banner',
        'image',
        'name',
        'slug' ,
        'description',
        'category_id',
    ];
    function plan (){
        return $this->belongsTo(Plan::class);
    }

    function items (){
        return $this->hasMany(Item::class);
    }

    function category (){
        return $this->belongsTo(Category::class);
    }

    function domain (){
        return $this->belongsTo(Domain::class);
    }

    function user (){
        return $this->belongsTo(User::class);
    }
}
