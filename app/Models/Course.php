<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable=['title','attachment','price','url','admin_id'];



    public function users()
    {
        return $this->belongsToMany(User::class, 'course_user')->withPivot('status');
    }

    public function carts()
    {
        return $this->belongsToMany(Cart::class, 'course_cart');
    }



}
