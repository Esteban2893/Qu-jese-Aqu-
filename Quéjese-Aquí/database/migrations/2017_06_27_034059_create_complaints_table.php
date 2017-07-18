<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->integer('user_id');
            $table->integer('department_id');
            $table->text('problem');
            $table->text('solution')->nullable();
            $table->boolean('available')->default('false');
            $table->timestamps();

            $table->foreign('department_id')
                ->references('id')
                ->on('departments');
            $table->foreign('entity_id')
                ->references('id')
                ->on('entities');
            $table->foreign('user_id')
                ->references('id')
                ->on('users');

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
