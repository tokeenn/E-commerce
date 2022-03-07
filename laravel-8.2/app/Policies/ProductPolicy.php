<?php

namespace App\Policies;

use App\Models\Product;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $users
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $users)
    {
        return $users->role === 'admin';
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $users
     * @param  \App\Models\Post  $products
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $users, Products $products)
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $users
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $users)
    {
     return $users->role === 'admin';
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $users
     * @param  \App\Models\Post  $products
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $users, Products $products)
    {
        return $users->role === 'admin';
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $users
     * @param  \App\Models\Post  $products
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $users, Product $products)
    {
        return $users->role === 'admin';
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $users
     * @param  \App\Models\Post  $products
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $users, Product $products)
    {
        return $users->role === 'admin';
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $users
     * @param  \App\Models\Post  $products
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $users, Product $products)
    {
        return $users->role === 'admin';
    }
}
