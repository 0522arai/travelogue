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
        Schema::create('timeschedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('post_id')->constrained('posts')->nullable()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->nullable()->onUpdate('cascade')->onDelete('cascade');
            $table->string('date');
            $table->string('time');
            $table->string('schedule');
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
        Schema::dropIfExists('timeschedules');
    }
};
