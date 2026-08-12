<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\FeedBack;
use Illuminate\Auth\Access\HandlesAuthorization;

class FeedBackPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:FeedBack');
    }

    public function view(AuthUser $authUser, FeedBack $feedBack): bool
    {
        return $authUser->can('View:FeedBack');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:FeedBack');
    }

    public function update(AuthUser $authUser, FeedBack $feedBack): bool
    {
        return $authUser->can('Update:FeedBack');
    }

    public function delete(AuthUser $authUser, FeedBack $feedBack): bool
    {
        return $authUser->can('Delete:FeedBack');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:FeedBack');
    }

    public function restore(AuthUser $authUser, FeedBack $feedBack): bool
    {
        return $authUser->can('Restore:FeedBack');
    }

    public function forceDelete(AuthUser $authUser, FeedBack $feedBack): bool
    {
        return $authUser->can('ForceDelete:FeedBack');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:FeedBack');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:FeedBack');
    }

    public function replicate(AuthUser $authUser, FeedBack $feedBack): bool
    {
        return $authUser->can('Replicate:FeedBack');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:FeedBack');
    }

}