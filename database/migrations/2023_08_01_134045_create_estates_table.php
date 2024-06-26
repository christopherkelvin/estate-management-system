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
        Schema::create('estates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('User_id')->constrained()->onDelete('cascade');
            $table->string('Location');
            $table->string('NumberOfBeds');
            $table->string('NumberOfBathrooms');
            $table->bigInteger('SellingPrice');
            $table->string('photo')->nullable();
            $table->string('Cartegory');
            $table->longText('Description');
            $table->double('Area');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estates');
    }
};
