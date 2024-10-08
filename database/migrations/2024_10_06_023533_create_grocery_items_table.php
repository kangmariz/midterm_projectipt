<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroceryItemsTable extends Migration
{
    public function up()
    {
        Schema::create('grocery_items', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Add this line for the name field
            $table->integer('quantity'); // Add this line for the quantity field
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('grocery_items');
    }
}

