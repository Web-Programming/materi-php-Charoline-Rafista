<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AuthServicesProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot():void
    {
        //untuk mengelola produk hanya admin yang bisa
        Gate::define('manage-products', function ($user) {
            return $user->role === 'admin';
        });
        //untuk update produk hanya admin dan sales yang bisa
        Gate::define('update-products', function ($user) {
            return $user->role === 'admin' || $user->role === 'sales';
        });
        //untuk delete produk hanya admin yang bisa
        Gate::define('delete-products', function ($user) {
            return $user->role === 'admin';
        });
        //untuk create produk dilakukan oleh sales
        Gate::define('create-products', function ($user) {
            return $user -> role == "sales";
        });
    }
}