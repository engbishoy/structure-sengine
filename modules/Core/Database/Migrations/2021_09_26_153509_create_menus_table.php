<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\Menu\Entities\Menu;
use Modules\Menu\Enums\TypeEnum;

class CreateMenusTable extends Migration
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
            $table->string('type');
            $table->string('title');
            $table->string('route')->nullable();
            $table->unsignedInteger('order')->nullable();
            $table->string('icon')->default('user_group');
            $table->json('sub_menu')->nullable();
            $table->json('active_routes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus');
    }
}
