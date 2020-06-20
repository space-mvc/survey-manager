<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateSurveyCriteriaTable
 */
class CreateSurveyCriteriaTable extends Migration
{
    /**
     * up.
     */
    public function up()
    {
        Schema::create('survey_criteria', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('survey_section_id');
            $table->foreign('survey_section_id')->references('id')->on('survey_sections');

            $table->string('name');
            $table->string('description');
            $table->string('criteria');
            $table->boolean('required');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('survey_criteria');
    }
}
