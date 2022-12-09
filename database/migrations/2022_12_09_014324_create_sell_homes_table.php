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
        Schema::create('sell_homes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('category_id');
            $table->integer('city_id');
            $table->integer('district_id')->nullable();
            $table->integer('ward_id')->nullable();
            $table->integer('streets_id')->nullable();
            $table->integer('projects_id')->nullable();
            $table->string('price')->nullable();
            $table->float('dien_tich');
            $table->float('mat_tien')->nullable();
            $table->float('duong_truoc_nha')->nullable();
            $table->integer('so_tang');
            $table->integer('so_phong');
            $table->integer('huongs')->nullable();
            $table->integer('so_wc')->nullable();
            $table->string('tieu_de');
            $table->text('noi_dung')->nullable();
            $table->string('latlng')->nullable();
            $table->text('images');
            $table->string('address');
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
        Schema::dropIfExists('sell_homes');
    }
};
