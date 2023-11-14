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
    Schema::create('marketplaces', function (Blueprint $table) {
      $table->id();
      $table->timestamps();
      $table->string("image");
      $table->string("nom");
      $table->float("prix");
      $table->float("nbr_place");
      $table->text("description");
      $table->string("fabricant");
      $table->string("modele");
      $table->date("date_fabrication");
      $table->string("condition");
      $table->string("couleur");
      $table->float("seats");
      $table->string("engine_capacity");
      $table->string("horse_power");
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('marketplaces');
  }
};
