<?php

namespace App\Http\Controllers;

use App\Models\GroceryItem;
use Illuminate\Http\Request;

class GroceryItemController extends Controller
{
    public function index()
    {
        $items = GroceryItem::all();
        return view('grocery.index', compact('items'));
    }

    public function create()
    {
        return view('grocery.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'quantity' => 'required|integer',
        ]);

        GroceryItem::create($request->all());

        return redirect()->route('grocery.index')->with('success', 'Grocery item created successfully.');
    }

    public function edit(GroceryItem $grocery)
    {
        return view('grocery.edit', compact('grocery'));
    }

    public function update(Request $request, GroceryItem $grocery)
    {
        $request->validate([
            'name' => 'required',
            'quantity' => 'required|integer',
        ]);

        $grocery->update($request->all());

        return redirect()->route('grocery.index')->with('success', 'Grocery item updated successfully.');
    }

    public function destroy(GroceryItem $grocery)
    {
        $grocery->delete();

        return redirect()->route('grocery.index')->with('success', 'Grocery item deleted successfully.');
    }
}
