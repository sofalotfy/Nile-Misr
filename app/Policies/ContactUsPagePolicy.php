<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\ContactUsPage;
use Illuminate\Auth\Access\HandlesAuthorization;

class ContactUsPagePolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:ContactUsPage');
    }

    public function view(AuthUser $authUser, ContactUsPage $contactUsPage): bool
    {
        return $authUser->can('View:ContactUsPage');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:ContactUsPage');
    }

    public function update(AuthUser $authUser, ContactUsPage $contactUsPage): bool
    {
        return $authUser->can('Update:ContactUsPage');
    }

    public function delete(AuthUser $authUser, ContactUsPage $contactUsPage): bool
    {
        return $authUser->can('Delete:ContactUsPage');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:ContactUsPage');
    }

    public function restore(AuthUser $authUser, ContactUsPage $contactUsPage): bool
    {
        return $authUser->can('Restore:ContactUsPage');
    }

    public function forceDelete(AuthUser $authUser, ContactUsPage $contactUsPage): bool
    {
        return $authUser->can('ForceDelete:ContactUsPage');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:ContactUsPage');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:ContactUsPage');
    }

    public function replicate(AuthUser $authUser, ContactUsPage $contactUsPage): bool
    {
        return $authUser->can('Replicate:ContactUsPage');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:ContactUsPage');
    }

}