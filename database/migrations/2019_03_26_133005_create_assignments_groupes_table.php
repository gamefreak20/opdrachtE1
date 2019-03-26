<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssignmentsGroupesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignment_groupe', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('assignment_id')->unsigned();
            $table->foreign('assignment_id')->references('id')->on('assignments')->onDelete('cascade');
            $table->bigInteger('groupe_id')->unsigned();
            $table->foreign('groupe_id')->references('id')->on('groupes')->onDelete('cascade');
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
        Schema::dropIfExists('assignment_groupe');
    }
}
