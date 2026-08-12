<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\SingleUmrahPackagePage;
use Illuminate\Auth\Access\HandlesAuthorization;

class SingleUmrahPackagePagePolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:SingleUmrahPackagePage');
    }

    public function view(AuthUser $authUser, SingleUmrahPackagePage $singleUmrahPackagePage): bool
    {
        return $authUser->can('View:SingleUmrahPackagePage');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:SingleUmrahPackagePage');
    }

    public function update(AuthUser $authUser, SingleUmrahPackagePage $singleUmrahPackagePage): bool
    {
        return $authUser->can('Update:SingleUmrahPackagePage');
    }

    public function delete(AuthUser $authUser, SingleUmrahPackagePage $singleUmrahPackagePage): bool
    {
        return $authUser->can('Delete:SingleUmrahPackagePage');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:SingleUmrahPackagePage');
    }

    public function restore(AuthUser $authUser, SingleUmrahPackagePage $singleUmrahPackagePage): bool
    {
        return $authUser->can('Restore:SingleUmrahPackagePage');
    }

    public function forceDelete(AuthUser $authUser, SingleUmrahPackagePage $singleUmrahPackagePage): bool
    {
        return $authUser->can('ForceDelete:SingleUmrahPackagePage');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:SingleUmrahPackagePage');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:SingleUmrahPackagePage');
    }

    public function replicate(AuthUser $authUser, SingleUmrahPackagePage $singleUmrahPackagePage): bool
    {
        return $authUser->can('Replicate:SingleUmrahPackagePage');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:SingleUmrahPackagePage');
    }

}