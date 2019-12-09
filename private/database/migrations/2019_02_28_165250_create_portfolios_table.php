<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
           $table->increments('id');
            $table->string('name', 255)->nullable();
            $table->longText('image')->nullable();
            $table->integer('categories_id')->nullable();
            $table->longText('subimage1')->nullable();
            $table->longText('subimage2')->nullable();
            $table->longText('subimage3')->nullable();
            $table->longText('subimage4')->nullable();
            $table->longText('subimage5')->nullable();
            $table->longText('subimage6')->nullable();

            $table->string('cName', 255)->nullable();
            $table->string('cService', 255)->nullable();
            $table->string('cWebsite', 255)->nullable(); 
            $table->string('objective', 255)->nullable();
            $table->string('tools', 255)->nullable();
            $table->string('challenge', 255)->nullable();

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
        Schema::dropIfExists('portfolios');
    }
}
