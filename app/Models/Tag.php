<?php

namespace App\Models;

use App\Traits\HasUuid;
use App\Traits\Orderable;
use App\Traits\Sluggable;
use App\Traits\HasChildren;
use App\Bag\SearchableTrait;
use App\Traits\SearchableQueryTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends Model
{
    use HasFactory, HasUuid, Sluggable, HasChildren, Orderable, SearchableTrait, SearchableQueryTrait, SoftDeletes;

    protected $fillable = [
        'uuid',
        'name',
        'slug',
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
            'tags.name' => 10,
        ]
    ];
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