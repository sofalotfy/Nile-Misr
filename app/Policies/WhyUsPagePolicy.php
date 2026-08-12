<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\WhyUsPage;
use Illuminate\Auth\Access\HandlesAuthorization;

class WhyUsPagePolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:WhyUsPage');
    }

    public function view(AuthUser $authUser, WhyUsPage $whyUsPage): bool
    {
        return $authUser->can('View:WhyUsPage');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:WhyUsPage');
    }

    public function update(AuthUser $authUser, WhyUsPage $whyUsPage): bool
    {
        return $authUser->can('Update:WhyUsPage');
    }

    public function delete(AuthUser $authUser, WhyUsPage $whyUsPage): bool
    {
        return $authUser->can('Delete:WhyUsPage');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:WhyUsPage');
    }

    public function restore(AuthUser $authUser, WhyUsPage $whyUsPage): bool
    {
        return $authUser->can('Restore:WhyUsPage');
    }

    public function forceDelete(AuthUser $authUser, WhyUsPage $whyUsPage): bool
    {
        return $authUser->can('ForceDelete:WhyUsPage');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:WhyUsPage');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:WhyUsPage');
    }

    public function replicate(AuthUser $authUser, WhyUsPage $whyUsPage): bool
    {
        return $authUser->can('Replicate:WhyUsPage');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:WhyUsPage');
    }

}