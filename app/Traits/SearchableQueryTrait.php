<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;

trait SearchableQueryTrait
{
    public function scopeArchived(Builder $builder, $status)
    {
        if ($status == "archived") {
            return $builder = $builder->onlyTrashed();
        }
    }

    public function scopeActivated(Builder $builder, $status)
    {
        if ($status == "active") {
            return $builder = $builder->where('is_active', true);
        }
    }

    public function scopeDrafted(Builder $builder, $status)
    {
        if ($status == "draft") {
            return $builder = $builder->where('status', 'draft');
        }
    }

    public function scopeDataSearch(Builder $builder, $query)
    {
        if ($query) {
            return $builder->search($query);
        }
    }

    public function scopeUser(Builder $builder, $user)
    {
        if ($user) {
            return $builder->where('user_id', $user);
        }
    }

    public function scopeTitle(Builder $builder, $title)
    {
        if ($title) {
            return $builder->where('title', 'like', '%' . trim($title) . '%');
        }
    }


    public function scopeTags(Builder $builder, $tags)
    {
        if ($tags) {
            return $builder->whereHas('tags', function ($q) use ($tags) {
                return  $q->whereIn('id', $tags);
            });
        }
    }

    // public function scopeOnAired(Builder $builder, $from, $to)
    // {
    //     if ($from && $to) {
    //         return $builder->whereBetween('onaired_at', [$from, $to]);
    //     }
    // }

    // public function scopeType(Builder $builder, $type)
    // {
    //     if ($type) {
    //         return $builder->whereRelation('types', 'slug', $type);
    //     }
    // }

    // public function scopeTeam(Builder $builder, $team_id)
    // {
    //     if ($team_id) {
    //         return $builder->where('team_id', $team_id);
    //     }
    // }
}