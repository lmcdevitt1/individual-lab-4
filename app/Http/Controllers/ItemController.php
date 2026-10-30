<?php

namespace App\Http\Controllers;

use App\Models\Item;

class ItemController extends Controller
{
    // Displays resources/views/items/index.blade.php
    public function index()
    {
        // Pulls all rows from your SQLite database table using Eloquent
        $appleItems = Item::where('manufacturer', 'Apple')->get();
	$dellItems = Item::where('manufacturer', 'Dell')->get();

return view('items.index',[
	'appleItems'=> $appleItems,
	'dellItems'=>$dellItems
]);
}

    // Displays the welcome page
    public function welcome()
    {
        return view('welcome');
    }
}