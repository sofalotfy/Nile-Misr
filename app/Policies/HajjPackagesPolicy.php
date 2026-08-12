<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\HajjPackages;
use Illuminate\Auth\Access\HandlesAuthorization;

class HajjPackagesPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:HajjPackages');
    }

    public function view(AuthUser $authUser, HajjPackages $hajjPackages): bool
    {
        return $authUser->can('View:HajjPackages');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:HajjPackages');
    }

    public function update(AuthUser $authUser, HajjPackages $hajjPackages): bool
    {
        return $authUser->can('Update:HajjPackages');
    }

    public function delete(AuthUser $authUser, HajjPackages $hajjPackages): bool
    {
        return $authUser->can('Delete:HajjPackages');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:HajjPackages');
    }

    public function restore(AuthUser $authUser, HajjPackages $hajjPackages): bool
    {
        return $authUser->can('Restore:HajjPackages');
    }

    public function forceDelete(AuthUser $authUser, HajjPackages $hajjPackages): bool
    {
        return $authUser->can('ForceDelete:HajjPackages');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:HajjPackages');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:HajjPackages');
    }

    public function replicate(AuthUser $authUser, HajjPackages $hajjPackages): bool
    {
        return $authUser->can('Replicate:HajjPackages');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:HajjPackages');
    }

}