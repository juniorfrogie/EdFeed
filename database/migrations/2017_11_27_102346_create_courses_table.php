<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name',100);
            $table->text('description');
            $table->DateTime('admission')->nullable();
            $table->DateTime('deadline')->nullable();
            $table->string('duration',20)->nullable();
            $table->float('tuition', 8, 2)->nullable();
            $table->text('outline')->nullable();
            $table->text('requirement')->nullable();
            $table->text('opportunity')->nullable();
            $table->integer('institute_id')->unsigned();
            
            $table->foreign('institute_id')
                  ->references('id')->on('institutes')
                  ->onDelete('cascade');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
        Schema::dropForeign('institute_id');
    }
}
