<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name')->unique();
            $table->string('description')->nullable();
            $table->integer('order')->nullable()->default(0);
        });

        Schema::create('links', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name')->unique();
            $table->string('route_name')->unique()->nullable();
            $table->string('url')->unique()->nullable();
            $table->integer('order')->nullable()->default(0);
        });

        Schema::create('link_menu', function (Blueprint $table) {
            $table->foreignId('link_id')->constrained();
            $table->foreignId('menu_id')->constrained();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus_links');
    }
}
