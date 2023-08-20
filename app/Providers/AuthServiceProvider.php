<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {

        //category
        Gate::define('index_category', function ( $user) {
       return $user->checkpermission("index_category");
        });
        Gate::define('create_category', function ( $user) {
            return $user->checkpermission("create_category");
             });
             Gate::define('edit_category', function ( $user) {
                return $user->checkpermission("edit_category");
                 });
                 Gate::define('delete_category', function ( $user) {
                    return $user->checkpermission("delete_category");
                     });


                     //product
        Gate::define('index_product', function ( $user) {
            return $user->checkpermission("index_product");
             });
             Gate::define('create_product', function ( $user) {
                 return $user->checkpermission("create_product");
                  });
                  Gate::define('edit_product', function ( $user) {
                     return $user->checkpermission("edit_product");
                      });
                      Gate::define('delete_product', function ( $user) {
                         return $user->checkpermission("delete_product");
                          });



                          //page
        Gate::define('index_page', function ( $user) {
            return $user->checkpermission("index_page");
             });
             Gate::define('create_page', function ( $user) {
                 return $user->checkpermission("create_page");
                  });
                  Gate::define('edit_page', function ( $user) {
                     return $user->checkpermission("edit_page");
                      });
                      Gate::define('delete_page', function ( $user) {
                         return $user->checkpermission("delete_page");
                          });


                          //brand
        Gate::define('index_brand', function ( $user) {
            return $user->checkpermission("index_brand");
             });
             Gate::define('create_brand', function ( $user) {
                 return $user->checkpermission("create_brand");
                  });
                  Gate::define('edit_brand', function ( $user) {
                     return $user->checkpermission("edit_brand");
                      });
                      Gate::define('delete_brand', function ( $user) {
                         return $user->checkpermission("delete_brand");
                          });


                          //user 
        Gate::define('index_user', function ( $user) {
            return $user->checkpermission("index_user");
             });
             Gate::define('create_user', function ( $user) {
                 return $user->checkpermission("create_user");
                  });
                  Gate::define('account', function ( $user) {
                    return $user->checkpermission("account");
                     });
                   Gate::define('edit_user', function ( $user) {
                     return $user->checkpermission("edit_user");
                      });
                      Gate::define('delete_user', function ( $user) {
                         return $user->checkpermission("delete_user");
                          });


                          //role
        Gate::define('index_role', function ( $user) {
            return $user->checkpermission("index_role");
             });
             Gate::define('create_role', function ( $user) {
                 return $user->checkpermission("create_role");
                  });
                  Gate::define('edit_role', function ( $user) {
                     return $user->checkpermission("edit_role");
                      });
                      Gate::define('delete_role', function ( $user) {
                         return $user->checkpermission("delete_role");
                          });
    }
}
