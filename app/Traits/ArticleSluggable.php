<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait ArticleSluggable
{
    public static function bootArticleSluggable()
    {
        static::creating(function ($model) {
            $model->slug = Str::slug($model->title . uniqid(true));
        });
    }
}