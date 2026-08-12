<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\SingleHijjPackagePage;
use Illuminate\Auth\Access\HandlesAuthorization;

class SingleHijjPackagePagePolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:SingleHijjPackagePage');
    }

    public function view(AuthUser $authUser, SingleHijjPackagePage $singleHijjPackagePage): bool
    {
        return $authUser->can('View:SingleHijjPackagePage');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:SingleHijjPackagePage');
    }

    public function update(AuthUser $authUser, SingleHijjPackagePage $singleHijjPackagePage): bool
    {
        return $authUser->can('Update:SingleHijjPackagePage');
    }

    public function delete(AuthUser $authUser, SingleHijjPackagePage $singleHijjPackagePage): bool
    {
        return $authUser->can('Delete:SingleHijjPackagePage');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:SingleHijjPackagePage');
    }

    public function restore(AuthUser $authUser, SingleHijjPackagePage $singleHijjPackagePage): bool
    {
        return $authUser->can('Restore:SingleHijjPackagePage');
    }

    public function forceDelete(AuthUser $authUser, SingleHijjPackagePage $singleHijjPackagePage): bool
    {
        return $authUser->can('ForceDelete:SingleHijjPackagePage');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:SingleHijjPackagePage');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:SingleHijjPackagePage');
    }

    public function replicate(AuthUser $authUser, SingleHijjPackagePage $singleHijjPackagePage): bool
    {
        return $authUser->can('Replicate:SingleHijjPackagePage');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:SingleHijjPackagePage');
    }

}