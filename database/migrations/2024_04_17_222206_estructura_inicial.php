<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        Schema::create('administrators', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
        });

        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->integer('cui');
            $table->string('gender');
            $table->string('email');
            $table->integer('age');
            $table->string('civil_status');
            $table->string('socioeconomic_level');
            $table->string('geographic_location');
            $table->string('Workplace');
            $table->string('level_of_studies');
            $table->string('profession');
            $table->foreignId('user_id');
        });

        Schema::create('lines', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('line_description');
        });

        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('url_products');
            $table->text('description');
            $table->float('price', 10, 2);
            $table->foreignId('category_id');
            $table->foreignId('line_id');
            $table->boolean('popular')->default(false);
        });

        Schema::create('phone_numbers', function (Blueprint $table) {
            $table->id();
            $table->string('phone');
            $table->foreignId('user_id');
        });

        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('address');
            $table->foreignId('user_id');
        });

        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id');
            $table->foreignId('client_addresses_id');
            $table->text('order_status');
            $table->text('shipping_info');
            $table->decimal('total', 20, 2);
        });

        Schema::create('orders_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id');
            $table->foreignId('product_id');
            $table->integer('quantity');
            $table->decimal('price',10, 2);
        });

        Schema::create('shopping_cart', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id');
            $table->foreignId('product_id');
        });

        Schema::create('promotions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('promotion_type');
            $table->decimal('price', 10, 2);
            $table->foreignId('product');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promotions');
        Schema::dropIfExists('shopping_cart');
        Schema::dropIfExists('orders_details');
        Schema::dropIfExists('orders');
        Schema::dropIfExists('addresses');
        Schema::dropIfExists('phone_numbers');
        Schema::dropIfExists('products');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('lines');
        Schema::dropIfExists('clients');
        Schema::dropIfExists('administrators');
    }
};
