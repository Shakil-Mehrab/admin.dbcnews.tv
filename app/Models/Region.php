<?php

namespace App\Models;

use App\Models\User;
use App\Models\Article;
use App\Traits\HasUuid;
use App\Models\Category;
use App\Traits\Orderable;
use App\Traits\Sluggable;
use App\Traits\HasChildren;
use Illuminate\Support\Str;
use App\Bag\SearchableTrait;
use Kalnoy\Nestedset\NodeTrait;
use App\Traits\SearchableQueryTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;

class Region extends Model
{
    use HasFactory, HasUuid, Orderable, SearchableTrait, SearchableQueryTrait, SoftDeletes,HasRecursiveRelationships;
    // use NodeTrait;
    protected $fillable = [
        'uuid',
        'name',
        'bd_name',
        'slug',
        'parent_id',
        'order',
        'lat',
        'lng'
    ];
    protected $hidden = [
        'deleted_at',
    ];

    /**
     * booted
     *
     * @return void
     */
    public static function booted()
    {
        static::creating(function (Model $model) {
            // $model->name = $model->slug;
            $prefix = $model->parent ? $model->parent->slug . ' ' : '';
            $model->slug = Str::slug($prefix . $model->name);
        });
    }

    protected $routeBindingKeys = [
        'uuid',
        'slug'
    ];
    protected $searchable = [
        'columns' => [
            'regions.name' => 10,
        ]
    ];

    protected $cascadeDeletes = ['articles'];
    public function getParentKeyName()
    {
        return 'parent_id';
    }
    public function getLocalKeyName()
    {
        return 'id';
    }
    // public function children()
    // {
    //     return $this->hasMany(Region::class, 'parent_id');
    // }

    // public function parent()
    // {
    //     return $this->belongsTo(Region::class, 'id', 'parent_id');
    // }
    public function articles()
    {
        return $this->belongsToMany(Article::class, 'article_region')->withTimestamps();
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