<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\OurServicesPage;
use Illuminate\Auth\Access\HandlesAuthorization;

class OurServicesPagePolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:OurServicesPage');
    }

    public function view(AuthUser $authUser, OurServicesPage $ourServicesPage): bool
    {
        return $authUser->can('View:OurServicesPage');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:OurServicesPage');
    }

    public function update(AuthUser $authUser, OurServicesPage $ourServicesPage): bool
    {
        return $authUser->can('Update:OurServicesPage');
    }

    public function delete(AuthUser $authUser, OurServicesPage $ourServicesPage): bool
    {
        return $authUser->can('Delete:OurServicesPage');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:OurServicesPage');
    }

    public function restore(AuthUser $authUser, OurServicesPage $ourServicesPage): bool
    {
        return $authUser->can('Restore:OurServicesPage');
    }

    public function forceDelete(AuthUser $authUser, OurServicesPage $ourServicesPage): bool
    {
        return $authUser->can('ForceDelete:OurServicesPage');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:OurServicesPage');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:OurServicesPage');
    }

    public function replicate(AuthUser $authUser, OurServicesPage $ourServicesPage): bool
    {
        return $authUser->can('Replicate:OurServicesPage');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:OurServicesPage');
    }

}