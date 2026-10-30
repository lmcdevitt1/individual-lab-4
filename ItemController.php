<?php

namespace App\Http\Controllers;

use App\Models\Item;

class ItemController extends Controller
{
    // Displays resources/views/items/index.blade.php
    public function index()
    {
        // Pulls all rows from your SQLite database table using Eloquent
        $items = Item::all();

        return view('items.index', ['items' => $items]);
    }

    // Displays resources/views/items.blade.php
    public function showItemsView()
    {
        // Pulls all rows from your SQLite database table using Eloquent
        $items = Item::all();

        return view('items', ['items' => $items]);
    }

    // Displays the welcome page
    public function welcome()
    {
        return view('welcome');
    }
}