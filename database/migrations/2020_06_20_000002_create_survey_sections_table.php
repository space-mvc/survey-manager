<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateSurveySectionsTable
 */
class CreateSurveySectionsTable extends Migration
{
    /**
     * up.
     */
    public function up()
    {
        Schema::create('survey_sections', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('survey_id');
            $table->foreign('survey_id')->references('id')->on('surveys');

            $table->string('name');
            $table->string('description');
            $table->string('set_key');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('survey_sections');
    }
}
