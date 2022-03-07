<?php

namespace App\Policies;

use App\Models\User;
use App\Models\CupContFormaPagamento;
use Gecche\PolicyBuilder\Facades\PolicyBuilder;
use Illuminate\Auth\Access\HandlesAuthorization;

class CupContFormaPagamentoPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CupContFormaPagamento  $model
     * @return mixed
     */
    public function view(User $user, CupContFormaPagamento $model)
    {
        //
        if ($user && $user->can('view cup_cont_forma_pagamento')) {
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
        if ($user && $user->can('create cup_cont_forma_pagamento')) {
            return true;
        }

        return false;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CupContFormaPagamento  $model
     * @return mixed
     */
    public function update(User $user, CupContFormaPagamento $model)
    {
        //
        if ($user && $user->can('edit cup_cont_forma_pagamento')) {
            return true;
        }

        return false;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CupContFormaPagamento  $model
     * @return mixed
     */
    public function delete(User $user, CupContFormaPagamento $model)
    {
        //
        if ($user && $user->can('delete cup_cont_forma_pagamento')) {
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
        if ($user && $user->can('listing cup_cont_forma_pagamento')) {
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

        if ($user && $user->can('view cup_cont_forma_pagamento')) {
            return PolicyBuilder::all($builder,CupContFormaPagamento::class);
        }

        return PolicyBuilder::none($builder,CupContFormaPagamento::class);

    }
}
