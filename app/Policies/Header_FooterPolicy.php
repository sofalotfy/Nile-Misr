<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\Header_Footer;
use Illuminate\Auth\Access\HandlesAuthorization;

class Header_FooterPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:HeaderFooter');
    }

    public function view(AuthUser $authUser, Header_Footer $headerFooter): bool
    {
        return $authUser->can('View:HeaderFooter');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:HeaderFooter');
    }

    public function update(AuthUser $authUser, Header_Footer $headerFooter): bool
    {
        return $authUser->can('Update:HeaderFooter');
    }

    public function delete(AuthUser $authUser, Header_Footer $headerFooter): bool
    {
        return $authUser->can('Delete:HeaderFooter');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:HeaderFooter');
    }

    public function restore(AuthUser $authUser, Header_Footer $headerFooter): bool
    {
        return $authUser->can('Restore:HeaderFooter');
    }

    public function forceDelete(AuthUser $authUser, Header_Footer $headerFooter): bool
    {
        return $authUser->can('ForceDelete:HeaderFooter');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:HeaderFooter');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:HeaderFooter');
    }

    public function replicate(AuthUser $authUser, Header_Footer $headerFooter): bool
    {
        return $authUser->can('Replicate:HeaderFooter');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:HeaderFooter');
    }

}