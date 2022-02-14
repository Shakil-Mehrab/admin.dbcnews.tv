<?php

namespace App\Models;

use App\Traits\HasUuid;
use App\Traits\Orderable;
use App\Traits\HasChildren;
use App\Bag\SearchableTrait;
use App\Traits\ArticleSluggable;
use App\Traits\CanbeBanglaDatetime;
use App\Traits\HasMultipleRouteKey;
use App\Traits\SearchableQueryTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Video extends Model
{
    use HasFactory,
    HasUuid,
    ArticleSluggable,
    HasChildren,
    Orderable,
    SearchableTrait,
    SearchableQueryTrait,
    SoftDeletes,
    CanbeBanglaDatetime,
    HasMultipleRouteKey;

    protected $fillable = [
        'uuid',
        'user_id',
        'slug',
        'title',
        'presenter',
        'url',
        'iframe',
        'link',
        'onaired_at',
        'content',
        'is_active',
        'highlighted',
        'pinned',
        'status',
    ];
    protected $hidden = [
        'deleted_at',
    ];

    protected $routeBindingKeys = [
        'id',
        'uuid',
        'slug'
    ];
    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected $searchable = [
        'columns' => [
            'videos.title' => 10,
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

    public function images() //media make problem
    {
        return $this->belongsToMany(Media::class, 'video_media')->withTimestamps();
    }

    public function featuredImageUrl($images) //media make problem
    {
        if ($images->count() > 0) {
            return $images[0]->getFullUrl();
        }
        return;
    }

    public function featuredImageDetails($images) //media make problem
    {
        if ($images->count() > 0) {
            return $images->first();
        }
        return;
    }

    /**
     * categories
     *
     * @return void
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'video_category')->withTimestamps();
    }

    /**
     * topics
     *
     * @return void
     */
    public function playlists()
    {
        return $this->belongsToMany(Playlist::class, 'video_playlist')->withTimestamps();
    }
}