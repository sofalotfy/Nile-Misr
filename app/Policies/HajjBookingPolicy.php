<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\HajjBooking;
use Illuminate\Auth\Access\HandlesAuthorization;

class HajjBookingPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:HajjBooking');
    }

    public function view(AuthUser $authUser, HajjBooking $hajjBooking): bool
    {
        return $authUser->can('View:HajjBooking');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:HajjBooking');
    }

    public function update(AuthUser $authUser, HajjBooking $hajjBooking): bool
    {
        return $authUser->can('Update:HajjBooking');
    }

    public function delete(AuthUser $authUser, HajjBooking $hajjBooking): bool
    {
        return $authUser->can('Delete:HajjBooking');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:HajjBooking');
    }

    public function restore(AuthUser $authUser, HajjBooking $hajjBooking): bool
    {
        return $authUser->can('Restore:HajjBooking');
    }

    public function forceDelete(AuthUser $authUser, HajjBooking $hajjBooking): bool
    {
        return $authUser->can('ForceDelete:HajjBooking');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:HajjBooking');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:HajjBooking');
    }

    public function replicate(AuthUser $authUser, HajjBooking $hajjBooking): bool
    {
        return $authUser->can('Replicate:HajjBooking');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:HajjBooking');
    }

}