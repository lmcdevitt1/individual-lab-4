<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller 
{
	public function index() 
		{
			// Pulls all rows from your sqlite database table using Eloquent
			$items = Item::all();

			return view('items.index', ['items' => $items]);
		}
		public function welcome()
			{
				return view('welcome');
			}
		}
	
