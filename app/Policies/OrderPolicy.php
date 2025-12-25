<?php

namespace App\Policies;

use App\Models\User;

class OrderPolicy
{
    /**
     * Create a new policy instance.
     */
    public function create(User $user)
    {
        return $user->role === 'user' || $user->role === 'admin';
    }
    public function update(User $user)
    {
        return $user->role === 'captain' || $user->role === 'admin';
    }
    public function index(User $user)
    {
        return $user->role === 'manager' || $user->role === 'admin' || $user->role === 'manager';
    }
}
