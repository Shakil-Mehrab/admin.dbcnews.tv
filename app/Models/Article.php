<?php

namespace App\Models;

use App\Models\User;
use App\Models\Region;
use App\Traits\HasUuid;
use App\Traits\DateTime;
use App\Traits\IsPinned;
use App\Traits\Orderable;
use App\Bag\SearchableTrait;
use App\Traits\ArticleSluggable;
use Spatie\MediaLibrary\HasMedia;
use App\Traits\CanbeBanglaDatetime;
use App\Traits\HasMultipleRouteKey;
use App\Traits\SearchableQueryTrait;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\SoftDeletes;
use Dyrynda\Database\Support\CascadeSoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

// use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Article extends Model
{
    use HasFactory,
    HasUuid,
    ArticleSluggable,
    Orderable,
    SearchableQueryTrait,
    SearchableTrait,
    SoftDeletes,
    // CascadeSoftDeletes,
    HasMultipleRouteKey,
    // InteractsWithMedia,
    IsPinned,
    Orderable,
    CanbeBanglaDatetime;

    protected $fillable = [
        'uuid',
        'slug',
        'user_id',
        'title',
        'kicker',
        'teaser',
        'content',
        'status',
        'is_active',
        'highlighted',
        'pinned',


    ];

    // protected $hidden = [
    //     'deleted_at',
    // ];

    // protected $cascadeDeletes = ['categories', 'topics'];

    // protected $routeBindingKeys = [
    //     'id',
    //     'uuid',
    //     'slug'
    // ];

    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }

    // protected $searchable = [
    //     'columns' => [
    //         'articles.title' => 10,
    //         // 'articles.onaired_at' => 5,
    //         // 'articles.remarks' => 2,
    //         'users.name' => 10,
    //         'categories.name' => 10
    //     ],
    //     'joins' => [
    //         'users' => ['articles.user_id', 'users.id'],
    //         'article_category' => ['articles.id', 'article_category.article_id'],
    //         'categories' => ['article_category.category_id', 'categories.id']
    //     ],
    // ];

    /**
     * user
     *
     * @return void
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    /**
     * categories
     *
     * @return void
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'article_category')->withTimestamps();
    }
    /**
     * topics
     *
     * @return void
     */
    public function topics()
    {
        return $this->belongsToMany(Topic::class, 'article_topic')->withTimestamps();
    }

    /**
     * tags
     *
     * @return void
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'article_tag')->withTimestamps();
    }

    /**
     * regions
     *
     * @return void
     */
    public function regions()
    {
        return $this->belongsToMany(Region::class, 'article_region')->withTimestamps();
    }

    public function ownTask()
    {
        return $this->user_id == auth()->user()->id;
    }

    /**
     * categories
     *
     * @return void
     */
    public function images() //media make problem
    {
        return $this->belongsToMany(Media::class, 'article_media')->withTimestamps();
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
}