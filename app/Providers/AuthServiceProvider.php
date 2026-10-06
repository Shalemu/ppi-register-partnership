<?php

namespace App\Providers;

use App\Models\User;
use App\Policies\System\UserPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
     
    ];

    public function boot(): void
    {
        $this->registerPolicies();
    }
}