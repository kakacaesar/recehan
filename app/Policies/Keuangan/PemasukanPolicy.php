<?php

declare(strict_types=1);

namespace App\Policies\Keuangan;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\Keuangan\Pemasukan;
use Illuminate\Auth\Access\HandlesAuthorization;

class PemasukanPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:Pemasukan');
    }

    public function view(AuthUser $authUser, Pemasukan $pemasukan): bool
    {
        return $authUser->can('View:Pemasukan');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:Pemasukan');
    }

    public function update(AuthUser $authUser, Pemasukan $pemasukan): bool
    {
        return $authUser->can('Update:Pemasukan');
    }

    public function delete(AuthUser $authUser, Pemasukan $pemasukan): bool
    {
        return $authUser->can('Delete:Pemasukan');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:Pemasukan');
    }

    public function restore(AuthUser $authUser, Pemasukan $pemasukan): bool
    {
        return $authUser->can('Restore:Pemasukan');
    }

    public function forceDelete(AuthUser $authUser, Pemasukan $pemasukan): bool
    {
        return $authUser->can('ForceDelete:Pemasukan');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:Pemasukan');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:Pemasukan');
    }

    public function replicate(AuthUser $authUser, Pemasukan $pemasukan): bool
    {
        return $authUser->can('Replicate:Pemasukan');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:Pemasukan');
    }

}