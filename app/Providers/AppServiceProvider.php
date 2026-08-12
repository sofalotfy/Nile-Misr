<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Spatie\Permission\PermissionRegistrar;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Support\ServiceProvider;
use App\Services\General\GetSiteData;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        app(PermissionRegistrar::class)
            ->setPermissionClass(Permission::class)
            ->setRoleClass(Role::class);

        // View::share('siteData', GetSiteData::execute());
    }
}
