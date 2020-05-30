<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('contenu')->nullable();
            $table->string('filePhoto1')->nullable();
            $table->string('filePhoto2')->nullable();
            $table->string('filePhoto3')->nullable();
            $table->string('filePhoto4')->nullable();
            $table->string('filePhoto5')->nullable();
            $table->string('filePhoto6')->nullable();
            $table->string('fileVideo1')->nullable();
            $table->string('fileVideo2')->nullable();
            $table->string('fileVideo3')->nullable();
            $table->string('fileYoutube1')->nullable();
            $table->string('fileYoutube2')->nullable();
            $table->string('Titre')->nullable();
            $table->dateTime('Date')->nullable();
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
        Schema::dropIfExists('activities');
    }
}
