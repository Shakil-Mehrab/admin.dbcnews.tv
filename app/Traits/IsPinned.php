<?php
namespace App\Traits;

trait IsPinned
{
    public function scopePinned($builder)
    {
        return $builder->where('pinned', true);
    }

    public function scopeNotPinned($builder)
    {
        return $builder->where('pinned', false);
    }
}