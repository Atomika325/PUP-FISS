<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->string('subj_code')->primary();
            $table->string('subj_desc');
            $table->enum('subj_hours',['1', '1.5', '2', '3', '5']);
            $table->enum('course_affiliated',['Accountancy','Information Technology', 'Finance','Entrepreneurship','Education','Hospitality Management', 'General Education']);
            $table->enum('subj_units',['1','3','5','6','9']);
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
        Schema::dropIfExists('subjects');
    }
}
