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
        Schema::create('memberships', function (Blueprint $table) {
            $table->id();
            $table->string('sur_name')->nullable();
            $table->string('other_names')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('birth_date')->nullable();
            $table->string('nationality')->nullable();
            $table->string('gender')->nullable();
            $table->string('institution')->nullable();
            $table->string('graduation_year')->nullable();
            $table->string('course_of_study')->nullable();
            $table->string('qualification')->nullable();
            $table->text('startup_overview')->nullable();
            $table->string('current_stage')->nullable();
            $table->text('social_problem')->nullable();
            $table->text('why_solve_problem')->nullable();
            $table->string('team_count')->nullable();
            $table->string('referer')->nullable();
            $table->string('why_join_community')->nullable();
            $table->boolean('is_entreprenuer')->nullable();
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
        Schema::dropIfExists('memberships');
    }
};
