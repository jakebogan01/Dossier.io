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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title', 30)
                ->nullable();
            $table->string('description', 180)
                ->nullable();
            $table->json('links')
                ->nullable();
            $table->boolean('public')
                ->default(1);
            $table->integer('total_likes')
                ->default(0);
            $table->string('profile_photo_path', 2048)
                ->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
};
