<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MarketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('markets')->insert([
            'name' => 'Banco Macro',
        ]);
        DB::table('markets')->insert([
            'name' => 'Banco Santiago',
        ]);
        DB::table('markets')->insert([
            'name' => 'Banco Patagonia',
        ]);
        DB::table('markets')->insert([
            'name' => 'Banco HCBC',
        ]);
        DB::table('markets')->insert([
            'name' => 'Banco Nacion',
        ]);
        DB::table('markets')->insert([
            'name' => 'Rentas Tucuman',
        ]);
        DB::table('markets')->insert([
            'name' => 'AFIP',
        ]);
        DB::table('markets')->insert([
            'name' => 'Patentes Tucuman',
        ]);
        DB::table('markets')->insert([
            'name' => 'Rentas Buenos Aires',
        ]);
        DB::table('markets')->insert([
            'name' => 'Farmacia del Pueblo',
        ]);
        DB::table('markets')->insert([
            'name' => 'Hospital San Cayetano',
        ]);
        DB::table('markets')->insert([
            'name' => 'Sanatorio del Norte',
        ]);
        DB::table('markets')->insert([
            'name' => 'Suicidio de Salud',
        ]);
        DB::table('markets')->insert([
            'name' => 'Osde',
        ]);
        DB::table('markets')->insert([
            'name' => 'Rentas Santiago',
        ]);
        DB::table('markets')->insert([
            'name' => 'Universidad Tecnologica Alumnos',
        ]);
        DB::table('markets')->insert([
            'name' => 'Peluqueria Flor de la V',
        ]);
        DB::table('markets')->insert([
            'name' => 'Masajes Ricardo',
        ]);
        DB::table('markets')->insert([
            'name' => 'Fisioterapia del Norte',
        ]);
        DB::table('markets')->insert([
            'name' => 'Peluqueria Pepe',
        ]);

        DB::table('phones')->insert([
            'phone_number' => '3815495993',
            'market_id' => 1,
        ]);DB::table('phones')->insert([
            'phone_number' => '3815495993',
            'market_id' => 2,
        ]);
        DB::table('phones')->insert([
            'phone_number' => '3815495993',
            'market_id' => 3,
        ]);
        DB::table('phones')->insert([
            'phone_number' => '3815495993',
            'market_id' => 4,
        ]);    
        DB::table('phones')->insert([
            'phone_number' => '3815495993',
            'market_id' => 5,
            
        ]);
        DB::table('phones')->insert([
            'phone_number' =>'3815495993' ,
            'market_id' => 6,
        ]);
        DB::table('phones')->insert([
            'phone_number' => '3815495993',
            'market_id' => 7,
        ]);
        DB::table('phones')->insert([
            'phone_number' => '3815495993',
            'market_id' => 8,
        ]);
        DB::table('phones')->insert([
            'phone_number' => '3815495993',
            'market_id' => 9,
        ]);
        DB::table('phones')->insert([
            'phone_number' => '3815495993',
            'market_id' => 10,
        ]);
        DB::table('phones')->insert([
            'phone_number' => '3815495993',
            'market_id' => 11,
        ]);
        DB::table('phones')->insert([
            'phone_number' => '3815495993',
            'market_id' => 12,
        ]);
        DB::table('phones')->insert([
            'phone_number' => '3815495993',
            'market_id' => 13,
        ]);
        DB::table('phones')->insert([
            'phone_number' => '3815495993',
            'market_id' => 14,
        ]);
        DB::table('phones')->insert([
            'phone_number' => '3815495993',
            'market_id' => 15,
        ]);
        DB::table('phones')->insert([
            'phone_number' => '3815495993',
            'market_id' => 16,
        ]);
        DB::table('phones')->insert([
            'phone_number' => '3815495993',
            'market_id' => 17,
        ]);
        DB::table('phones')->insert([
            'phone_number' => '3815495993',
            'market_id' => 18,
        ]);
        DB::table('phones')->insert([
            'phone_number' => '3815495993',
            'market_id' => 19,
        ]);
        DB::table('phones')->insert([
            'phone_number' => '3815495993',
            'market_id' => 20,
        ]);


        DB::table('addresses')->insert([
            'location' => 'San Martin 2931',
            'market_id' => 1,
        ]);
        DB::table('addresses')->insert([
            'location' => 'San Martin 2931',
            'market_id' => 2,
        ]);
        DB::table('addresses')->insert([
            'location' => 'San Martin 2931',
            'market_id' => 3,
        ]);
        DB::table('addresses')->insert([
            'location' => 'San Martin 2931',
            'market_id' => 4,
        ]);
        DB::table('addresses')->insert([
            'location' => 'San Martin 2931',
            'market_id' => 5,
        ]);
        DB::table('addresses')->insert([
            'location' => 'San Martin 2931',
            'market_id' => 6,
        ]);
        DB::table('addresses')->insert([
            'location' => 'San Martin 2931',
            'market_id' => 7,
        ]);
        DB::table('addresses')->insert([
            'location' => 'San Martin 2931',
            'market_id' => 8,
        ]);
        DB::table('addresses')->insert([
            'location' => 'San Martin 2931',
            'market_id' => 9,
        ]);
        DB::table('addresses')->insert([
            'location' => 'San Martin 2931',
            'market_id' => 10,
        ]);
        DB::table('addresses')->insert([
            'location' => 'San Martin 2931',
            'market_id' => 11,
        ]);
        DB::table('addresses')->insert([
            'location' => 'San Martin 2931',
            'market_id' => 12,
        ]);
        DB::table('addresses')->insert([
            'location' => 'San Martin 2931',
            'market_id' => 13,
        ]);
        DB::table('addresses')->insert([
            'location' => 'San Martin 2931',
            'market_id' => 14,
        ]);
        DB::table('addresses')->insert([
            'location' => 'San Martin 2931',
            'market_id' => 15,
        ]);
        DB::table('addresses')->insert([
            'location' => 'San Martin 2931',
            'market_id' => 16,
        ]);
        DB::table('addresses')->insert([
            'location' => 'San Martin 2931',
            'market_id' => 17,
        ]);
        DB::table('addresses')->insert([
            'location' => 'San Martin 2931',
            'market_id' => 18,
        ]);
        DB::table('addresses')->insert([
            'location' => 'San Martin 2931',
            'market_id' => 19,
        ]);
        DB::table('addresses')->insert([
            'location' => 'San Martin 2931',
            'market_id' => 20,
        ]);

        DB::table('emails')->insert([
            'email' => 'empresa@hotmail.com',
            'market_id' => 1,
        ]);
        DB::table('emails')->insert([
            'email' => 'empresa@hotmail.com',
            'market_id' => 2,
        ]);
        DB::table('emails')->insert([
            'email' => 'empresa@hotmail.com',
            'market_id' => 3,
        ]);
        DB::table('emails')->insert([
            'email' => 'empresa@hotmail.com',
            'market_id' => 4,
        ]);
        DB::table('emails')->insert([
            'email' => 'empresa@hotmail.com',
            'market_id' => 5,
        ]);
        DB::table('emails')->insert([
            'email' => 'empresa@hotmail.com',
            'market_id' => 6,
        ]);
        DB::table('emails')->insert([
            'email' => 'empresa@hotmail.com',
            'market_id' => 7,
        ]);
        DB::table('emails')->insert([
            'email' => 'empresa@hotmail.com',
            'market_id' => 8,
        ]);
        DB::table('emails')->insert([
            'email' => 'empresa@hotmail.com',
            'market_id' => 9,
        ]);
        DB::table('emails')->insert([
            'email' => 'empresa@hotmail.com',
            'market_id' => 10,
        ]);
        DB::table('emails')->insert([
            'email' => 'empresa@hotmail.com',
            'market_id' => 11,
        ]);
        DB::table('emails')->insert([
            'email' => 'empresa@hotmail.com',
            'market_id' => 12,
        ]);
        DB::table('emails')->insert([
            'email' => 'empresa@hotmail.com',
            'market_id' => 13,
        ]);
        DB::table('emails')->insert([
            'email' => 'empresa@hotmail.com',
            'market_id' => 14,
        ]);
        DB::table('emails')->insert([
            'email' => 'empresa@hotmail.com',
            'market_id' => 15,
        ]);
        DB::table('emails')->insert([
            'email' => 'empresa@hotmail.com',
            'market_id' => 16,
        ]);
        DB::table('emails')->insert([
            'email' => 'empresa@hotmail.com',
            'market_id' => 17,
        ]);
        DB::table('emails')->insert([
            'email' => 'empresa@hotmail.com',
            'market_id' => 18,
        ]);
        DB::table('emails')->insert([
            'email' => 'empresa@hotmail.com',
            'market_id' => 19,
        ]);
        DB::table('emails')->insert([
            'email' => 'empresa@hotmail.com',
            'market_id' => 20,
        ]);



        DB::table('categories')->insert([
            'name' => 'Jubilados',
            'description' => 'Jubilados',
            'market_id' => 1,
        ]);
        DB::table('categories')->insert([
            'name' => 'Jubilados',
            'description' => 'Jubilados',
            'market_id' => 2,
        ]);
        DB::table('categories')->insert([
            'name' => 'Jubilados',
            'description' => 'Jubilados',
            'market_id' => 3,
        ]);
        DB::table('categories')->insert([
            'name' => 'Jubilados',
            'description' => 'Jubilados',
            'market_id' => 4,
        ]);
        DB::table('categories')->insert([
            'name' => 'Jubilados',
            'description' => 'Jubilados',
            'market_id' => 5,
        ]);
        DB::table('categories')->insert([
            'name' => 'Jubilados',
            'description' => 'Jubilados',
            'market_id' => 6,
        ]);
        DB::table('categories')->insert([
            'name' => 'Jubilados',
            'description' => 'Jubilados',
            'market_id' => 7,
        ]);
        DB::table('categories')->insert([
            'name' => 'Jubilados',
            'description' => 'Jubilados',
            'market_id' => 8,
        ]);
        DB::table('categories')->insert([
            'name' => 'Jubilados',
            'description' => 'Jubilados',
            'market_id' => 9,
        ]);
        DB::table('categories')->insert([
            'name' => 'Jubilados',
            'description' => 'Jubilados',
            'market_id' => 10,
        ]);
        DB::table('categories')->insert([
            'name' => 'Jubilados',
            'description' => 'Jubilados',
            'market_id' => 11,
        ]);
        DB::table('categories')->insert([
            'name' => 'Jubilados',
            'description' => 'Jubilados',
            'market_id' => 12,
        ]);
        DB::table('categories')->insert([
            'name' => 'Jubilados',
            'description' => 'Jubilados',
            'market_id' => 13,
        ]);
        DB::table('categories')->insert([
            'name' => 'Jubilados',
            'description' => 'Jubilados',
            'market_id' => 14,
        ]);
        DB::table('categories')->insert([
            'name' => 'Jubilados',
            'description' => 'Jubilados',
            'market_id' => 15,
        ]);
        DB::table('categories')->insert([
            'name' => 'Jubilados',
            'description' => 'Jubilados',
            'market_id' => 16,
        ]); 
        DB::table('categories')->insert([
            'name' => 'Jubilados',
            'description' => 'Jubilados',
            'market_id' => 17,
        ]); 
        DB::table('categories')->insert([
            'name' => 'Jubilados',
            'description' => 'Jubilados',
            'market_id' => 18,
        ]); 
        DB::table('categories')->insert([
            'name' => 'Jubilados',
            'description' => 'Jubilados',
            'market_id' => 19,
        ]); 
        DB::table('categories')->insert([
            'name' => 'Jubilados',
            'description' => 'Jubilados',
            'market_id' => 20,
        ]); 



        
    }
}
