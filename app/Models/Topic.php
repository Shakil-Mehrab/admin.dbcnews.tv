<?php

namespace App\Models;

use App\Traits\HasUuid;
use App\Traits\Orderable;
use App\Traits\Sluggable;
use App\Bag\SearchableTrait;
use App\Traits\SearchableQueryTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Topic extends Model
{
    use HasFactory, HasUuid, Sluggable, Orderable, SearchableTrait, SearchableQueryTrait, SoftDeletes;
    protected $fillable = [
        'uuid',
        'name',
        'slug',
        'user_id',
        'bd_name'

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
            'topics.name' => 10,
        ]
    ];

    protected $cascadeDeletes = ['articles'];

    public function articles()
    {
        return $this->belongsToMany(Article::class, 'article_topic')->withTimestamps();
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
}