<?php

namespace App\Policies;

use App\Models\User;
use App\Models\CupContCostanteFattEl;
use Gecche\PolicyBuilder\Facades\PolicyBuilder;
use Illuminate\Auth\Access\HandlesAuthorization;

class CupContCostanteFattElPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CupContCostanteFattEl  $model
     * @return mixed
     */
    public function view(User $user, CupContCostanteFattEl $model)
    {
        //
        if ($user && $user->can('view cup_cont_costante_fatt_el')) {
            return true;
        }

        return false;

    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
        if ($user && $user->can('create cup_cont_costante_fatt_el')) {
            return true;
        }

        return false;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CupContCostanteFattEl  $model
     * @return mixed
     */
    public function update(User $user, CupContCostanteFattEl $model)
    {
        //
        if ($user && $user->can('edit cup_cont_costante_fatt_el')) {
            return true;
        }

        return false;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CupContCostanteFattEl  $model
     * @return mixed
     */
    public function delete(User $user, CupContCostanteFattEl $model)
    {
        //
        if ($user && $user->can('delete cup_cont_costante_fatt_el')) {
            return true;
        }

        return false;
    }

    /**
     * Determine whether the user can access to the listing of the models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function listing(User $user)
    {
        //
        if ($user && $user->can('listing cup_cont_costante_fatt_el')) {
            return true;
        }

        return false;
    }

    /**
     * Determine whether the user can access to the listing of the models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function acl(User $user, $builder)
    {

        if ($user && $user->can('view cup_cont_costante_fatt_el')) {
            return PolicyBuilder::all($builder,CupContCostanteFattEl::class);
        }

        return PolicyBuilder::none($builder,CupContCostanteFattEl::class);

    }
}
