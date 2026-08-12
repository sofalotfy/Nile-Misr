<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\OurSupervisorsPage;
use Illuminate\Auth\Access\HandlesAuthorization;

class OurSupervisorsPagePolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:OurSupervisorsPage');
    }

    public function view(AuthUser $authUser, OurSupervisorsPage $ourSupervisorsPage): bool
    {
        return $authUser->can('View:OurSupervisorsPage');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:OurSupervisorsPage');
    }

    public function update(AuthUser $authUser, OurSupervisorsPage $ourSupervisorsPage): bool
    {
        return $authUser->can('Update:OurSupervisorsPage');
    }

    public function delete(AuthUser $authUser, OurSupervisorsPage $ourSupervisorsPage): bool
    {
        return $authUser->can('Delete:OurSupervisorsPage');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:OurSupervisorsPage');
    }

    public function restore(AuthUser $authUser, OurSupervisorsPage $ourSupervisorsPage): bool
    {
        return $authUser->can('Restore:OurSupervisorsPage');
    }

    public function forceDelete(AuthUser $authUser, OurSupervisorsPage $ourSupervisorsPage): bool
    {
        return $authUser->can('ForceDelete:OurSupervisorsPage');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:OurSupervisorsPage');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:OurSupervisorsPage');
    }

    public function replicate(AuthUser $authUser, OurSupervisorsPage $ourSupervisorsPage): bool
    {
        return $authUser->can('Replicate:OurSupervisorsPage');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:OurSupervisorsPage');
    }

}