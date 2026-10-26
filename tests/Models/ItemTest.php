<?php

namespace Tests\Models;

use App\Models\Item;
use PHPUnit\Framework\TestCase;

class ItemTest extends TestCase
{
    private Item $item;

    public function setUp(): void
    {
        $this->item = new Item([
            'name' => 'Laptop',
            'manufacturer' => 'Dell',
            'make' => 'Inspiron',
            'model' => '15 3000',
            'price' => '100.00',
            'price_range' => '100.00 - 110.00/mo',
        ]);
    }

    public function testToString()
    {
$this->item->name = 'Laptop';
        $this->item->manufacturer = 'Dell';
        $this->item->make = 'Inspiron';
        $this->item->model = '15 3000';
        $this->item->price = '100.00';
        $this->item->price_range = '100.00 - 110.00/mo';

        $expectedString = "Name: Laptop, Manufacturer: Dell, Make: Inspiron, Model: 15 3000, Price: 100.00, Price Range: 100.00 - 110.00/mo";
        $this->assertEquals($expectedString, (string)$this->item);
    }
}
