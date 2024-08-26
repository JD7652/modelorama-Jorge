<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            // $table->id(); //Nos crea en automática una primary, not null, atributo de auto increment
            // $table->integer('product_number');
            // $table->text('desc');
            // $table->text('name');
            // $table->text('branch');
            // $table->text('price');

            // $table->timestamps(); //Esto es una fecha formateada en milesimas de segundo


            $table->id(); //primary, not null, auto increment

            $table->integer('product_number');
            $table->longText('desc');
            $table->text('name');
            $table->string('branch')->nullable();
            $table->float('price', 8, 2);
            $table->timestamps(); //date format (mms)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
