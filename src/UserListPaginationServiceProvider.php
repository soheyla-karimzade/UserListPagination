<?php
namespace Daa\UserListPagination;

use Illuminate\Support\ServiceProvider;

class UserListPaginationServiceProvider extends ServiceProvider{
        public function boot(){
            $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
            $this->loadViewsFrom(__DIR__.'/../resources/views', 'userListPagination');
            $this->mergeConfigFrom(
                __DIR__.'/config/userListPagination.php', 'userListPagination'
            );
            $this->publishes([
                __DIR__.'/config/userListPagination.php' => config_path('userListPagination.php'),
                __DIR__.'/../resources/views' => base_path('resources/views/userListPagination'),
            ]);
        }
        public function register(){}
}