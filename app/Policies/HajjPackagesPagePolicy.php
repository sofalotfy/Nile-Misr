<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\HajjPackagesPage;
use Illuminate\Auth\Access\HandlesAuthorization;

class HajjPackagesPagePolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:HajjPackagesPage');
    }

    public function view(AuthUser $authUser, HajjPackagesPage $hajjPackagesPage): bool
    {
        return $authUser->can('View:HajjPackagesPage');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:HajjPackagesPage');
    }

    public function update(AuthUser $authUser, HajjPackagesPage $hajjPackagesPage): bool
    {
        return $authUser->can('Update:HajjPackagesPage');
    }

    public function delete(AuthUser $authUser, HajjPackagesPage $hajjPackagesPage): bool
    {
        return $authUser->can('Delete:HajjPackagesPage');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:HajjPackagesPage');
    }

    public function restore(AuthUser $authUser, HajjPackagesPage $hajjPackagesPage): bool
    {
        return $authUser->can('Restore:HajjPackagesPage');
    }

    public function forceDelete(AuthUser $authUser, HajjPackagesPage $hajjPackagesPage): bool
    {
        return $authUser->can('ForceDelete:HajjPackagesPage');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:HajjPackagesPage');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:HajjPackagesPage');
    }

    public function replicate(AuthUser $authUser, HajjPackagesPage $hajjPackagesPage): bool
    {
        return $authUser->can('Replicate:HajjPackagesPage');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:HajjPackagesPage');
    }

}