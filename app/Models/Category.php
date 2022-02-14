<?php

namespace App\Models;

use App\Bag\SearchableTrait;
use App\Traits\HasUuid;
use App\Traits\Orderable;
use App\Traits\Sluggable;
use App\Traits\HasChildren;
use App\Traits\SearchableQueryTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, HasUuid, Sluggable, HasChildren, Orderable, SearchableTrait, SearchableQueryTrait, SoftDeletes;
    protected $fillable = [
        'uuid',
        'name',
        'slug',
        'bd_name',
        'parent_id',
        'user_id',
    ];
    protected $hidden = [
        'deleted_at',
    ];

    protected $routeBindingKeys = [
        'uuid',
        'slug'
    ];
    protected $searchable = [
        'columns' => [
            'categories.name' => 10,
        ]
    ];

    protected $cascadeDeletes = ['articles'];

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function articles()
    {
        return $this->belongsToMany(Article::class, 'article_category')->withTimestamps();
    }

    /**
     * user
     *
     * @return void
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function ownTask()
    {
        return $this->user_id == auth()->user()->id;
    }
}