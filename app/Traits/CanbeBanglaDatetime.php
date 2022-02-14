<?php

namespace App\Traits;

use App\Bag\BanglaDatetimeFormatter;
use BanglaDatetimeFormat\Types\DateTime as EnDateTime;
use App\Bag\BanglaNumber;

trait CanbeBanglaDatetime
{
    public function getFormattedDatetimeAttribute()
    {
        // if ($this->created_at->diffInDays(now()) >= 1) {
        return (new EnDateTime($this->created_at))->format('l jS F Y h:i:s A');
        // }

        // return BanglaDatetimeFormatter::bn_number($this->created_at->diffForHumans());
    }

    public function getHumansDatetimeAttribute()
    {
        if ($this->created_at) {
            return BanglaNumber::en2bn($this->created_at->diffForHumans());
        }
        return null;
    }


    public function createdAtHumans()
    {
        return;
    }

    // public function dateWithMonthNameTimeAtHumans()
    // {
    //     if ($this->created_at) {
    //         return $this->dateWithMonthName() . ', ' . $this->createdAtHumans();
    //     }
    //     return;
    // }

    // public function getFormattedDatetimeAttribute()
    // {
    //     if ($this->created_at->diffInDays(now()) >= 1) {
    //         return (new EnDateTime($this->created_at))->format('l jS F Y h:i:s A');
    //     }

    //     return BanglaDatetimeFormatter::bn_number($this->created_at->diffForHumans());
    // }
}