<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\AboutUsPage;
use Illuminate\Auth\Access\HandlesAuthorization;

class AboutUsPagePolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:AboutUsPage');
    }

    public function view(AuthUser $authUser, AboutUsPage $aboutUsPage): bool
    {
        return $authUser->can('View:AboutUsPage');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:AboutUsPage');
    }

    public function update(AuthUser $authUser, AboutUsPage $aboutUsPage): bool
    {
        return $authUser->can('Update:AboutUsPage');
    }

    public function delete(AuthUser $authUser, AboutUsPage $aboutUsPage): bool
    {
        return $authUser->can('Delete:AboutUsPage');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:AboutUsPage');
    }

    public function restore(AuthUser $authUser, AboutUsPage $aboutUsPage): bool
    {
        return $authUser->can('Restore:AboutUsPage');
    }

    public function forceDelete(AuthUser $authUser, AboutUsPage $aboutUsPage): bool
    {
        return $authUser->can('ForceDelete:AboutUsPage');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:AboutUsPage');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:AboutUsPage');
    }

    public function replicate(AuthUser $authUser, AboutUsPage $aboutUsPage): bool
    {
        return $authUser->can('Replicate:AboutUsPage');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:AboutUsPage');
    }

}