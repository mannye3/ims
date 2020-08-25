<?php 

namespace App\Helpers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Basic
{
    public static function createRoles()
    {
        /**
         * TODO 
         * The level field will be used to implement 
         * mega-checker based on the roles 
         */
        $RoleItems = [
            [
                'name'        => 'CEO',
                'slug'        => 'ceo',
                'description' => 'CEO Role',
                'level'       => 1,
            ],
            [
                'name'        => 'Manager',
                'slug'        => 'manager',
                'description' => 'Manager Role',
                'level'       => 2,
            ],
            [
                'name'        => 'Sales',
                'slug'        => 'sales',
                'description' => 'Sales Role',
                'level'       => 3,
            ],
        ];
        /*
        * Add Role Items
        */
        foreach ($RoleItems as $RoleItem) {
            $newRoleItem = config('roles.models.role')::where('slug', '=', $RoleItem['slug'])->first();
            if ($newRoleItem === null) {
                $newRoleItem = config('roles.models.role')::create([
                    'name'          => $RoleItem['name'],
                    'slug'          => $RoleItem['slug'],
                    'description'   => $RoleItem['description'],
                    'level'         => $RoleItem['level'],
                ]);
            }
        }
    }


    public static function createSuperUser()
    {
        $data = [
            'firstname' => 'john',
            'lastname' => 'ceo',
            'phone' => '0901234567',
            'email' => 'admin@mail.com',
            'password' => Hash::make('secret12'),
        ];

        $user = User::where('email', $data['email'])->first();

        if (!$user) {
            User::insert($data);
        }

        $roles = 1;  // Assign ceo role
        $user->attachRole($roles);
        
    }
}