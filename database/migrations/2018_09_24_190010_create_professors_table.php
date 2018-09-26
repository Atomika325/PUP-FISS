<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professors', function (Blueprint $table) {
            $table->string('faculty_id')->primary();
            $table->string('last_name');
            $table->string('first_name');
            $table->enum('faculty_type',['permanent','part-time','designee']);
            $table->enum('expertise',['Information Technology','Accountancy', 'Finance','Entrepreneurship','Education','Hospitality Management', 'General Education']);
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
        Schema::dropIfExists('professors');
    }
}
