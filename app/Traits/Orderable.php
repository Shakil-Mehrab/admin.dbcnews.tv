<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;

trait Orderable
{
    public function scopeOrdered(Builder $builder, $order = 'desc', $column = 'created_at')
    {
        return $builder->orderBy($column, $order);
    }

    // public function scopeArchived(Builder $builder, $archived)
    // {
    //     return $builder->when($archived, function ($q) {
    //         return $q->withTrashed();
    //     });
    // }

    // public function scopeDataSearch(Builder $builder, $query)
    // {
    //     if ($query) {
    //         return $builder->search($query);
    //     }
    //     return;
    // }
}