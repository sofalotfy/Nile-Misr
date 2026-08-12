<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\UmrahPackages;
use Illuminate\Auth\Access\HandlesAuthorization;

class UmrahPackagesPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:UmrahPackages');
    }

    public function view(AuthUser $authUser, UmrahPackages $umrahPackages): bool
    {
        return $authUser->can('View:UmrahPackages');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:UmrahPackages');
    }

    public function update(AuthUser $authUser, UmrahPackages $umrahPackages): bool
    {
        return $authUser->can('Update:UmrahPackages');
    }

    public function delete(AuthUser $authUser, UmrahPackages $umrahPackages): bool
    {
        return $authUser->can('Delete:UmrahPackages');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:UmrahPackages');
    }

    public function restore(AuthUser $authUser, UmrahPackages $umrahPackages): bool
    {
        return $authUser->can('Restore:UmrahPackages');
    }

    public function forceDelete(AuthUser $authUser, UmrahPackages $umrahPackages): bool
    {
        return $authUser->can('ForceDelete:UmrahPackages');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:UmrahPackages');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:UmrahPackages');
    }

    public function replicate(AuthUser $authUser, UmrahPackages $umrahPackages): bool
    {
        return $authUser->can('Replicate:UmrahPackages');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:UmrahPackages');
    }

}