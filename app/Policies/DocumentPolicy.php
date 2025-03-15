<?php

namespace App\Policies;

use App\Models\User;

use App\Models\Document;

class DocumentPolicy
{
    public function viewAny(User $user)
    {
        return $user->can('documents.view');
    }

    public function create(User $user)
    {
        return $user->can('documents.create');
    }

    public function update(User $user, Document $document)
    {
        return $user->can('documents.update');
    }

    public function delete(User $user, Document $document)
    {
        return $user->can('documents.delete');
    }
}
