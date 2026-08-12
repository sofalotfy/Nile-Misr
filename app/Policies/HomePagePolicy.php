<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\HomePage;
use Illuminate\Auth\Access\HandlesAuthorization;

class HomePagePolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:HomePage');
    }

    public function view(AuthUser $authUser, HomePage $homePage): bool
    {
        return $authUser->can('View:HomePage');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:HomePage');
    }

    public function update(AuthUser $authUser, HomePage $homePage): bool
    {
        return $authUser->can('Update:HomePage');
    }

    public function delete(AuthUser $authUser, HomePage $homePage): bool
    {
        return $authUser->can('Delete:HomePage');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:HomePage');
    }

    public function restore(AuthUser $authUser, HomePage $homePage): bool
    {
        return $authUser->can('Restore:HomePage');
    }

    public function forceDelete(AuthUser $authUser, HomePage $homePage): bool
    {
        return $authUser->can('ForceDelete:HomePage');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:HomePage');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:HomePage');
    }

    public function replicate(AuthUser $authUser, HomePage $homePage): bool
    {
        return $authUser->can('Replicate:HomePage');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:HomePage');
    }

}