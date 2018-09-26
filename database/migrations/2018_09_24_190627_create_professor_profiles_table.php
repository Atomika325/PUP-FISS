<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessorProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professor_profiles', function (Blueprint $table) {
            $table->string('faculty_id')->primary();
            $table->binary('fac_pic');
            $table->string('fname');
            $table->string('lname');
            $table->string('email')->unique();
            $table->integer('contact_no');
            $table->string('pref_subj');
            $table->string('deg_grad');
            $table->string('masters_deg');
            $table->string('doctor_deg');
            $table->enum('faculty_type',['permanent','part-time','designee']);
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
        Schema::dropIfExists('professor_profiles');
    }
}
