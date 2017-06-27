<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComplaintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complaints', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('entity_id');
            $table->integer('department_id');
            $table->string('problem');
            $table->string('solution')->nullable();
            $table->boolean('available')->default('false');
             $table->timestamps();

            $table->foreign('department_id')
                ->references('id')
                ->on('departments');
            $table->foreign('entity_id')
                ->references('id')
                ->on('entities');         
           
        });
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('complaints');
    }
}
