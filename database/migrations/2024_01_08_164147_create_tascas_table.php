<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tascas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name', 100)->unique();
            $table->string('slug', 100)->unique();
            $table->boolean('completed')->default(false);
            $table->text('description')->nullable();
            $table->foreignId('projecte_id')->
            references('id')->
            on('projectes')->
            onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tascas');
    }
};
