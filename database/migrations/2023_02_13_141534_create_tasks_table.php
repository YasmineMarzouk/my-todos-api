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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('todo_list_id');
            $table->foreign('todo_list_id')->on('todo_lists')->references('id')->onDelete('cascade');
            $table->string('title');
            $table->unsignedTinyInteger('status')->default(1);
            $table->unsignedTinyInteger('is_daily_routine')->default(false);
            $table->timestamp('finished_at')->nullable();
            $table->text("comments")->nullable();
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
        Schema::dropIfExists('tasks');
    }
};
