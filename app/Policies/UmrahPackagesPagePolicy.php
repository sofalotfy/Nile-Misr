<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\UmrahPackagesPage;
use Illuminate\Auth\Access\HandlesAuthorization;

class UmrahPackagesPagePolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:UmrahPackagesPage');
    }

    public function view(AuthUser $authUser, UmrahPackagesPage $umrahPackagesPage): bool
    {
        return $authUser->can('View:UmrahPackagesPage');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:UmrahPackagesPage');
    }

    public function update(AuthUser $authUser, UmrahPackagesPage $umrahPackagesPage): bool
    {
        return $authUser->can('Update:UmrahPackagesPage');
    }

    public function delete(AuthUser $authUser, UmrahPackagesPage $umrahPackagesPage): bool
    {
        return $authUser->can('Delete:UmrahPackagesPage');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:UmrahPackagesPage');
    }

    public function restore(AuthUser $authUser, UmrahPackagesPage $umrahPackagesPage): bool
    {
        return $authUser->can('Restore:UmrahPackagesPage');
    }

    public function forceDelete(AuthUser $authUser, UmrahPackagesPage $umrahPackagesPage): bool
    {
        return $authUser->can('ForceDelete:UmrahPackagesPage');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:UmrahPackagesPage');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:UmrahPackagesPage');
    }

    public function replicate(AuthUser $authUser, UmrahPackagesPage $umrahPackagesPage): bool
    {
        return $authUser->can('Replicate:UmrahPackagesPage');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:UmrahPackagesPage');
    }

}