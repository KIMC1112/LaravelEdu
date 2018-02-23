<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->increments('id', 8);
            $table->string('bannerName', 60)->nullable();
            $table->string('bannerUrl', 128)->nullable();
            $table->string('teacherName', 60)->nullable();
            $table->string('teacherUrl', 128)->nullable();
            $table->tinyInteger('category')->nullable();
            $table->smallInteger('bannerSort')->nullable();
            $table->text('content')->nullable();
            $table->tinyInteger('status')->nullable();
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
        Schema::dropIfExists('banners');
    }
}
