<?php

namespace App\Providers;


use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use App\User;
use App\Permission;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies();
        
     
        $permissions=Permission::with('roles')->get();
        foreach ($permissions as $p) {
            # code...
            $gate->define($p->name,function(User $user) use ($p){
                return $user->hasPermission($p);
    
    
            });
    
            
        } 
       //Criar Super Admin
        $gate->before(function (User $user,$ability)
        {
            if($user->hasAnyRole('owner'))
            return true ;
            
        });
    }

        //
    }

