<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroceryItem extends Model
{
    use HasFactory;

    // Specify the fields that are mass assignable
    protected $fillable = ['name', 'quantity']; // Add your required fields here
}
