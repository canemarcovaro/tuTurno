<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2020-04-15 13:16:32',
                'updated_at' => '2020-04-15 13:16:32',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2020-04-15 13:16:32',
                'updated_at' => '2020-04-15 13:16:32',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2020-04-15 13:16:32',
                'updated_at' => '2020-04-15 13:16:32',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2020-04-15 13:16:32',
                'updated_at' => '2020-04-15 13:16:32',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2020-04-15 13:16:32',
                'updated_at' => '2020-04-15 13:16:32',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2020-04-15 13:16:32',
                'updated_at' => '2020-04-15 13:16:32',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2020-04-15 13:16:32',
                'updated_at' => '2020-04-15 13:16:32',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2020-04-15 13:16:32',
                'updated_at' => '2020-04-15 13:16:32',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2020-04-15 13:16:32',
                'updated_at' => '2020-04-15 13:16:32',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2020-04-15 13:16:32',
                'updated_at' => '2020-04-15 13:16:32',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2020-04-15 13:16:32',
                'updated_at' => '2020-04-15 13:16:32',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2020-04-15 13:16:32',
                'updated_at' => '2020-04-15 13:16:32',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2020-04-15 13:16:32',
                'updated_at' => '2020-04-15 13:16:32',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2020-04-15 13:16:32',
                'updated_at' => '2020-04-15 13:16:32',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2020-04-15 13:16:32',
                'updated_at' => '2020-04-15 13:16:32',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2020-04-15 13:16:32',
                'updated_at' => '2020-04-15 13:16:32',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2020-04-15 13:16:32',
                'updated_at' => '2020-04-15 13:16:32',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2020-04-15 13:16:32',
                'updated_at' => '2020-04-15 13:16:32',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2020-04-15 13:16:32',
                'updated_at' => '2020-04-15 13:16:32',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2020-04-15 13:16:32',
                'updated_at' => '2020-04-15 13:16:32',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2020-04-15 13:16:32',
                'updated_at' => '2020-04-15 13:16:32',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2020-04-15 13:16:32',
                'updated_at' => '2020-04-15 13:16:32',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2020-04-15 13:16:32',
                'updated_at' => '2020-04-15 13:16:32',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2020-04-15 13:16:32',
                'updated_at' => '2020-04-15 13:16:32',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2020-04-15 13:16:32',
                'updated_at' => '2020-04-15 13:16:32',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'created_at' => '2020-04-15 13:16:32',
                'updated_at' => '2020-04-15 13:16:32',
            ),
            26 => 
            array (
                'id' => 37,
                'key' => 'browse_markets',
                'table_name' => 'markets',
                'created_at' => '2020-04-16 19:24:57',
                'updated_at' => '2020-04-16 19:24:57',
            ),
            27 => 
            array (
                'id' => 38,
                'key' => 'read_markets',
                'table_name' => 'markets',
                'created_at' => '2020-04-16 19:24:57',
                'updated_at' => '2020-04-16 19:24:57',
            ),
            28 => 
            array (
                'id' => 39,
                'key' => 'edit_markets',
                'table_name' => 'markets',
                'created_at' => '2020-04-16 19:24:57',
                'updated_at' => '2020-04-16 19:24:57',
            ),
            29 => 
            array (
                'id' => 40,
                'key' => 'add_markets',
                'table_name' => 'markets',
                'created_at' => '2020-04-16 19:24:57',
                'updated_at' => '2020-04-16 19:24:57',
            ),
            30 => 
            array (
                'id' => 41,
                'key' => 'delete_markets',
                'table_name' => 'markets',
                'created_at' => '2020-04-16 19:24:57',
                'updated_at' => '2020-04-16 19:24:57',
            ),
            31 => 
            array (
                'id' => 42,
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'created_at' => '2020-04-16 19:36:38',
                'updated_at' => '2020-04-16 19:36:38',
            ),
            32 => 
            array (
                'id' => 43,
                'key' => 'read_categories',
                'table_name' => 'categories',
                'created_at' => '2020-04-16 19:36:38',
                'updated_at' => '2020-04-16 19:36:38',
            ),
            33 => 
            array (
                'id' => 44,
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'created_at' => '2020-04-16 19:36:38',
                'updated_at' => '2020-04-16 19:36:38',
            ),
            34 => 
            array (
                'id' => 45,
                'key' => 'add_categories',
                'table_name' => 'categories',
                'created_at' => '2020-04-16 19:36:38',
                'updated_at' => '2020-04-16 19:36:38',
            ),
            35 => 
            array (
                'id' => 46,
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'created_at' => '2020-04-16 19:36:38',
                'updated_at' => '2020-04-16 19:36:38',
            ),
            36 => 
            array (
                'id' => 47,
                'key' => 'browse_servers',
                'table_name' => 'servers',
                'created_at' => '2020-04-16 19:38:24',
                'updated_at' => '2020-04-16 19:38:24',
            ),
            37 => 
            array (
                'id' => 48,
                'key' => 'read_servers',
                'table_name' => 'servers',
                'created_at' => '2020-04-16 19:38:24',
                'updated_at' => '2020-04-16 19:38:24',
            ),
            38 => 
            array (
                'id' => 49,
                'key' => 'edit_servers',
                'table_name' => 'servers',
                'created_at' => '2020-04-16 19:38:24',
                'updated_at' => '2020-04-16 19:38:24',
            ),
            39 => 
            array (
                'id' => 50,
                'key' => 'add_servers',
                'table_name' => 'servers',
                'created_at' => '2020-04-16 19:38:24',
                'updated_at' => '2020-04-16 19:38:24',
            ),
            40 => 
            array (
                'id' => 51,
                'key' => 'delete_servers',
                'table_name' => 'servers',
                'created_at' => '2020-04-16 19:38:24',
                'updated_at' => '2020-04-16 19:38:24',
            ),
            41 => 
            array (
                'id' => 57,
                'key' => 'browse_turns',
                'table_name' => 'turns',
                'created_at' => '2020-04-16 19:42:14',
                'updated_at' => '2020-04-16 19:42:14',
            ),
            42 => 
            array (
                'id' => 58,
                'key' => 'read_turns',
                'table_name' => 'turns',
                'created_at' => '2020-04-16 19:42:14',
                'updated_at' => '2020-04-16 19:42:14',
            ),
            43 => 
            array (
                'id' => 59,
                'key' => 'edit_turns',
                'table_name' => 'turns',
                'created_at' => '2020-04-16 19:42:14',
                'updated_at' => '2020-04-16 19:42:14',
            ),
            44 => 
            array (
                'id' => 60,
                'key' => 'add_turns',
                'table_name' => 'turns',
                'created_at' => '2020-04-16 19:42:14',
                'updated_at' => '2020-04-16 19:42:14',
            ),
            45 => 
            array (
                'id' => 61,
                'key' => 'delete_turns',
                'table_name' => 'turns',
                'created_at' => '2020-04-16 19:42:14',
                'updated_at' => '2020-04-16 19:42:14',
            ),
            46 => 
            array (
                'id' => 62,
                'key' => 'browse_phones',
                'table_name' => 'phones',
                'created_at' => '2020-04-16 19:44:26',
                'updated_at' => '2020-04-16 19:44:26',
            ),
            47 => 
            array (
                'id' => 63,
                'key' => 'read_phones',
                'table_name' => 'phones',
                'created_at' => '2020-04-16 19:44:26',
                'updated_at' => '2020-04-16 19:44:26',
            ),
            48 => 
            array (
                'id' => 64,
                'key' => 'edit_phones',
                'table_name' => 'phones',
                'created_at' => '2020-04-16 19:44:26',
                'updated_at' => '2020-04-16 19:44:26',
            ),
            49 => 
            array (
                'id' => 65,
                'key' => 'add_phones',
                'table_name' => 'phones',
                'created_at' => '2020-04-16 19:44:26',
                'updated_at' => '2020-04-16 19:44:26',
            ),
            50 => 
            array (
                'id' => 66,
                'key' => 'delete_phones',
                'table_name' => 'phones',
                'created_at' => '2020-04-16 19:44:26',
                'updated_at' => '2020-04-16 19:44:26',
            ),
            51 => 
            array (
                'id' => 72,
                'key' => 'browse_addresses',
                'table_name' => 'addresses',
                'created_at' => '2020-04-16 19:48:06',
                'updated_at' => '2020-04-16 19:48:06',
            ),
            52 => 
            array (
                'id' => 73,
                'key' => 'read_addresses',
                'table_name' => 'addresses',
                'created_at' => '2020-04-16 19:48:06',
                'updated_at' => '2020-04-16 19:48:06',
            ),
            53 => 
            array (
                'id' => 74,
                'key' => 'edit_addresses',
                'table_name' => 'addresses',
                'created_at' => '2020-04-16 19:48:06',
                'updated_at' => '2020-04-16 19:48:06',
            ),
            54 => 
            array (
                'id' => 75,
                'key' => 'add_addresses',
                'table_name' => 'addresses',
                'created_at' => '2020-04-16 19:48:06',
                'updated_at' => '2020-04-16 19:48:06',
            ),
            55 => 
            array (
                'id' => 76,
                'key' => 'delete_addresses',
                'table_name' => 'addresses',
                'created_at' => '2020-04-16 19:48:06',
                'updated_at' => '2020-04-16 19:48:06',
            ),
            56 => 
            array (
                'id' => 77,
                'key' => 'browse_emails',
                'table_name' => 'emails',
                'created_at' => '2020-04-16 19:49:18',
                'updated_at' => '2020-04-16 19:49:18',
            ),
            57 => 
            array (
                'id' => 78,
                'key' => 'read_emails',
                'table_name' => 'emails',
                'created_at' => '2020-04-16 19:49:18',
                'updated_at' => '2020-04-16 19:49:18',
            ),
            58 => 
            array (
                'id' => 79,
                'key' => 'edit_emails',
                'table_name' => 'emails',
                'created_at' => '2020-04-16 19:49:18',
                'updated_at' => '2020-04-16 19:49:18',
            ),
            59 => 
            array (
                'id' => 80,
                'key' => 'add_emails',
                'table_name' => 'emails',
                'created_at' => '2020-04-16 19:49:18',
                'updated_at' => '2020-04-16 19:49:18',
            ),
            60 => 
            array (
                'id' => 81,
                'key' => 'delete_emails',
                'table_name' => 'emails',
                'created_at' => '2020-04-16 19:49:18',
                'updated_at' => '2020-04-16 19:49:18',
            ),
        ));
        
        
    }
}