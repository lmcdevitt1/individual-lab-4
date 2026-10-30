<?php

namespace Database\Seeders;
use App\Models\Item;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
	$items = [
		new Item([
			'name' => 'Laptop',
			'manufacturer' => 'Dell',
			'make' => 'Inspiron',
			'model' => '15 3000',
			'price' => '100.00',
			'price_range' => '100.00 - 110.00/mo',
		]),
		new Item([
                	'name' => 'Laptop',
	                'manufacturer' => 'Dell',
	                'make' => 'Inspiron',
        	        'model' => '16 Plus 7640',
                	'price' => '100.00',
	                'price_range' => '100.00 - 110.00/mo',
	        ]),

        	    new Item([
	                'name' => 'Laptop',
	                'manufacturer' => 'Dell',
	                'make' => 'XPS',
       		        'model' => '9350',
       		        'price' => '100.00',
       	        	'price_range' => '100.00 - 110.00/mo',
            	]),

            	new Item([
                	'name' => 'Laptop',
	                'manufacturer' => 'Dell',
	                'make' => 'XPS',
			'model' => '9440',
			'price' => '100.00',
			'price_range' => '100.00 - 110.00/mo',
            ]),

            new Item([
                'name' => 'Laptop',
                'manufacturer' => 'Dell',
                'make' => 'XPS',
                'model' => '9640',
                'price' => '100.00',
                'price_range' => '100.00 - 110.00/mo',
            ]),

            new Item([
                'name' => 'Laptop',
                'manufacturer' => 'Apple',
                'make' => 'MacBook Neo',
                'model' => 'A3404',
                'price' => '110.00',
                'price_range' => '110.00 - 120.00/mo',
            ]),

            new Item([
                'name' => 'Laptop',
                'manufacturer' => 'Apple',
                'make' => 'MacBook Air 15" (2026 M5)',
                'model' => 'A3449',
                'price' => '110.00',
                'price_range' => '110.00 - 120.00/mo',
            ]),

            new Item([
                'name' => 'Laptop',
                'manufacturer' => 'Apple',
                'make' => 'MacBook Air 13" (2026 M5)',
                'model' => 'A3448',
                'price' => '110.00',
                'price_range' => '110.00 - 120.00/mo',
            ]),

            new Item([
                'name' => 'Laptop',
                'manufacturer' => 'Apple',
                'make' => 'MacBook Air 15" (2025 M4)',
                'model' => 'A3240',
                'price' => '110.00',
                'price_range' => '110.00 - 120.00/mo',
            ]),

            new Item([
                'name' => 'Laptop',
                'manufacturer' => 'Apple',
                'make' => 'MacBook Air 13" (2025 M4)',
                'model' => 'A3241',
                'price' => '110.00',
                'price_range' => '110.00 - 120.00/mo',
            ]),

            new Item([
                'name' => 'Laptop',
                'manufacturer' => 'Apple',
                'make' => 'MacBook Air 15" (2024 M3)',
                'model' => 'A3113',
                'price' => '110.00',
                'price_range' => '110.00 - 120.00/mo',
            ]),

            new Item([
                'name' => 'Laptop',
                'manufacturer' => 'Apple',
                'make' => 'MacBook Air 13" (2024 M3)',
                'model' => 'A3448',
                'price' => '110.00',
                'price_range' => '110.00 - 120.00/mo',
            ]),

            new Item([
                'name' => 'Laptop',
                'manufacturer' => 'Apple',
                'make' => 'MacBook Pro 14" (2026 M5 Pro)',
                'model' => 'A3451',
                'price' => '150.00',
                'price_range' => '150.00 - 160.00/mo',
            ]),

            new Item([
                'name' => 'Laptop',
                'manufacturer' => 'Apple',
                'make' => 'MacBook Pro 14" (2026 M5 Max)',
                'model' => 'A3450',
                'price' => '150.00',
                'price_range' => '150.00 - 160.00/mo',
            ]),

            new Item([
                'name' => 'Laptop',
                'manufacturer' => 'Apple',
                'make' => 'MacBook Pro 16" (2026 M5 Pro)',
                'model' => 'A3450',
                'price' => '150.00',
                'price_range' => '150.00 - 160.00/mo',
            ]),

            new Item([
                'name' => 'Laptop',
                'manufacturer' => 'Apple',
                'make' => 'MacBook Pro 16" (2026 M5 Max)',
                'model' => 'A3450',
                'price' => '150.00',
                'price_range' => '150.00 - 160.00/mo',
            ]),

            new Item([
                'name' => 'Laptop',
                'manufacturer' => 'Apple',
                'make' => 'MacBook Pro 14" (2025 M5 Base)',
                'model' => 'A3184',
                'price' => '150.00',
                'price_range' => '150.00 - 160.00/mo',
            ]),

            new Item([
                'name' => 'Laptop',
                'manufacturer' => 'Apple',
                'make' => 'MacBook Pro 14" (2024 , M4) ',
                'model' => 'A3450',
                'price' => '150.00',
                'price_range' => '150.00 - 160.00/mo',
            ]),
        ];
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
