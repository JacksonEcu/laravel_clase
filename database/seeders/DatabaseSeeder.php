<?php

namespace Database\Seeders;

use App\Models\Level;
use App\Models\Location;
use App\Models\Perfil;
use App\Models\Group;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        
        // Level::factory(10)->create();
        // User::factory(10)->create();
        // Perfil::factory(10)->create();
        // Location::factory(10)->create();

        Group::factory(3)->create(); 
        Level::factory()->create(['name'=>'Oro']);
        Level::factory()->create(['name'=>'Bronce']);
        Level::factory()->create(['name'=>'Plata']);
        User::factory(5)->create()->each(function($user){
            $perfil=$user->perfil()->save(Perfil::make());
            $perfil->location()->save(Location::make());
            $user->groups()->attach($this->array(rand(1,3)));
        });

        
    }

    public function array($max)
    {
       $values=[];
       for($_REQUEST["i"]=1;$_REQUEST["i"]<$max;$_REQUEST["i"]++){
          $values[]=$_REQUEST["i"];
       }
       return $values;
    }

    
    
}

