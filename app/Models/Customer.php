<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'phone',
        'email',
    ];
    public static function booted()
    {
        static::creating(function ($model) {
            $model->slug = Str::slug($model->name . uniqid(true));
        });
    }
}