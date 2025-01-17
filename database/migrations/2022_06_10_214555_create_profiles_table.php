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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->constrained()
                ->cascadeOnDelete();
            $table->string('portfolio_name', 18)
                ->nullable();
            $table->string('slug')
                ->nullable();
            $table->string('job_position', 28)
                ->nullable();
            $table->integer('total_clients')
                ->nullable();
            $table->integer('total_tools')
                ->nullable();
            $table->boolean('aware')
                ->default(0);
            $table->json('settings')
                ->nullable();
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
        Schema::dropIfExists('profiles');
    }
};
