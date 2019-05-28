<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiteLocalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_locales', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('language_id');
            $table->string('name');
            $table->string('locale');
            $table->string('path');
            $table->string('public');
            $table->unsignedInteger('redirect_to')->nullable();
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
        Schema::dropIfExists('site_locales');
    }
}
