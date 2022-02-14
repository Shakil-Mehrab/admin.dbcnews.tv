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

class Playlist extends Model
{
    use HasFactory, HasUuid, Sluggable, HasChildren, Orderable, SearchableTrait, SearchableQueryTrait, SoftDeletes;

    protected $fillable = [
        'uuid',
        'name',
        'slug',
        'bd_name',
        'user_id',
        'onaired_at',
        'status',
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
            'playlists.name' => 10,
        ]
    ];

    // protected $cascadeDeletes = ['articles'];

    public function videos()
    {
        return $this->belongsToMany(Video::class, 'video_playlist')->withTimestamps();
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