<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\ReviewsPage;
use Illuminate\Auth\Access\HandlesAuthorization;

class ReviewsPagePolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:ReviewsPage');
    }

    public function view(AuthUser $authUser, ReviewsPage $reviewsPage): bool
    {
        return $authUser->can('View:ReviewsPage');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:ReviewsPage');
    }

    public function update(AuthUser $authUser, ReviewsPage $reviewsPage): bool
    {
        return $authUser->can('Update:ReviewsPage');
    }

    public function delete(AuthUser $authUser, ReviewsPage $reviewsPage): bool
    {
        return $authUser->can('Delete:ReviewsPage');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:ReviewsPage');
    }

    public function restore(AuthUser $authUser, ReviewsPage $reviewsPage): bool
    {
        return $authUser->can('Restore:ReviewsPage');
    }

    public function forceDelete(AuthUser $authUser, ReviewsPage $reviewsPage): bool
    {
        return $authUser->can('ForceDelete:ReviewsPage');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:ReviewsPage');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:ReviewsPage');
    }

    public function replicate(AuthUser $authUser, ReviewsPage $reviewsPage): bool
    {
        return $authUser->can('Replicate:ReviewsPage');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:ReviewsPage');
    }

}