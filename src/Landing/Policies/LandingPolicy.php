<?php

namespace Myrtle\Core\Landing\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class LandingPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

	public function before(User $user)
	{
		if ($this->admin($user))
		{
			return true;
		}
	}

	public function admin(User $auth)
	{
		return $auth->allPermissions->contains(function ($ability, $key)
		{
			return $ability->name === 'landing.admin';
		});
	}
}
