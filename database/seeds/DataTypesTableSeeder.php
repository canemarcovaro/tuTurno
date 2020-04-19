<?php

use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'User',
                'display_name_plural' => 'Users',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2020-04-15 13:16:32',
                'updated_at' => '2020-04-15 13:16:32',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural' => 'Menus',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2020-04-15 13:16:32',
                'updated_at' => '2020-04-15 13:16:32',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Role',
                'display_name_plural' => 'Roles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'policy_name' => NULL,
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2020-04-15 13:16:32',
                'updated_at' => '2020-04-15 13:16:32',
            ),
            3 => 
            array (
                'id' => 6,
                'name' => 'markets',
                'slug' => 'markets',
                'display_name_singular' => 'Market',
                'display_name_plural' => 'Markets',
                'icon' => 'voyager-company',
                'model_name' => 'App\\Market',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2020-04-16 19:24:57',
                'updated_at' => '2020-04-16 19:26:15',
            ),
            4 => 
            array (
                'id' => 7,
                'name' => 'categories',
                'slug' => 'categories',
                'display_name_singular' => 'Category',
                'display_name_plural' => 'Categories',
                'icon' => 'voyager-categories',
                'model_name' => 'App\\Category',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2020-04-16 19:36:38',
                'updated_at' => '2020-04-16 19:36:38',
            ),
            5 => 
            array (
                'id' => 8,
                'name' => 'servers',
                'slug' => 'servers',
                'display_name_singular' => 'Server',
                'display_name_plural' => 'Servers',
                'icon' => 'voyager-laptop',
                'model_name' => 'App\\Server',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2020-04-16 19:38:24',
                'updated_at' => '2020-04-16 19:38:24',
            ),
            6 => 
            array (
                'id' => 10,
                'name' => 'turns',
                'slug' => 'turns',
                'display_name_singular' => 'Turn',
                'display_name_plural' => 'Turns',
                'icon' => 'voyager-ticket',
                'model_name' => 'App\\Turn',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2020-04-16 19:42:14',
                'updated_at' => '2020-04-16 19:42:14',
            ),
            7 => 
            array (
                'id' => 11,
                'name' => 'phones',
                'slug' => 'phones',
                'display_name_singular' => 'Phone',
                'display_name_plural' => 'Phones',
                'icon' => 'voyager-phone',
                'model_name' => 'App\\Phone',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2020-04-16 19:44:26',
                'updated_at' => '2020-04-16 19:44:26',
            ),
            8 => 
            array (
                'id' => 13,
                'name' => 'addresses',
                'slug' => 'addresses',
                'display_name_singular' => 'Address',
                'display_name_plural' => 'Addresses',
                'icon' => 'voyager-milestone',
                'model_name' => 'App\\Address',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2020-04-16 19:48:06',
                'updated_at' => '2020-04-16 19:48:06',
            ),
            9 => 
            array (
                'id' => 14,
                'name' => 'emails',
                'slug' => 'emails',
                'display_name_singular' => 'Email',
                'display_name_plural' => 'Emails',
                'icon' => 'voyager-mail',
                'model_name' => 'App\\Email',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2020-04-16 19:49:18',
                'updated_at' => '2020-04-16 19:49:18',
            ),
        ));
        
        
    }
}