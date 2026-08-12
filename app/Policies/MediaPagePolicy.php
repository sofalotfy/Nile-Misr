<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\MediaPage;
use Illuminate\Auth\Access\HandlesAuthorization;

class MediaPagePolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:MediaPage');
    }

    public function view(AuthUser $authUser, MediaPage $mediaPage): bool
    {
        return $authUser->can('View:MediaPage');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:MediaPage');
    }

    public function update(AuthUser $authUser, MediaPage $mediaPage): bool
    {
        return $authUser->can('Update:MediaPage');
    }

    public function delete(AuthUser $authUser, MediaPage $mediaPage): bool
    {
        return $authUser->can('Delete:MediaPage');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:MediaPage');
    }

    public function restore(AuthUser $authUser, MediaPage $mediaPage): bool
    {
        return $authUser->can('Restore:MediaPage');
    }

    public function forceDelete(AuthUser $authUser, MediaPage $mediaPage): bool
    {
        return $authUser->can('ForceDelete:MediaPage');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:MediaPage');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:MediaPage');
    }

    public function replicate(AuthUser $authUser, MediaPage $mediaPage): bool
    {
        return $authUser->can('Replicate:MediaPage');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:MediaPage');
    }

}