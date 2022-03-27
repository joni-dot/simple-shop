<?php

namespace Tests\Traits;

use App\Models\User;

trait CanSignIn
{
    /**
     * Sign in to the system.
     *
     * @return  void
     */
    public function signIn(): void
    {
        $this->actingAs(User::factory()->create());
    }
}
