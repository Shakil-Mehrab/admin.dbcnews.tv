<?php

namespace App\Traits;

use App\Models\Team;
use App\Team\TeamSlug;

trait UserPermission
{


    public function isAdmin()
    {
        return in_array($this->email, config('admin.emails'));
    }

    // public function currentTeam()
    // {
    //     return $this->belongsTo(Team::class, 'current_team_id', 'id');
    // }
    // public function isNullCurrentTeam()
    // {
    //     return $this->current_team_id == null;
    // }
    // public function isCurrentTeamSocial()
    // {
    //     return optional($this->currentTeam)->slug == TeamSlug::SOCIAL_SLUG;
    // }
    // public function isCurrentTeamPortal()
    // {
    //     return optional($this->currentTeam)->slug == TeamSlug::PORTAL_SLUG;
    // }

    // public function selfUser()
    // {
    //     return $this->id == auth()->user()->id;
    // }
    // public function isPortal()
    // {
    //     return optional($this->team)->slug == TeamSlug::PORTAL_SLUG;
    // }
}