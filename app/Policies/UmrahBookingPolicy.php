<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\UmrahBooking;
use Illuminate\Auth\Access\HandlesAuthorization;

class UmrahBookingPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:UmrahBooking');
    }

    public function view(AuthUser $authUser, UmrahBooking $umrahBooking): bool
    {
        return $authUser->can('View:UmrahBooking');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:UmrahBooking');
    }

    public function update(AuthUser $authUser, UmrahBooking $umrahBooking): bool
    {
        return $authUser->can('Update:UmrahBooking');
    }

    public function delete(AuthUser $authUser, UmrahBooking $umrahBooking): bool
    {
        return $authUser->can('Delete:UmrahBooking');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:UmrahBooking');
    }

    public function restore(AuthUser $authUser, UmrahBooking $umrahBooking): bool
    {
        return $authUser->can('Restore:UmrahBooking');
    }

    public function forceDelete(AuthUser $authUser, UmrahBooking $umrahBooking): bool
    {
        return $authUser->can('ForceDelete:UmrahBooking');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:UmrahBooking');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:UmrahBooking');
    }

    public function replicate(AuthUser $authUser, UmrahBooking $umrahBooking): bool
    {
        return $authUser->can('Replicate:UmrahBooking');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:UmrahBooking');
    }

}