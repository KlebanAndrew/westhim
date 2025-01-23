<?php

use App\Models\ServiceText;
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
        Schema::create('service_texts', function (Blueprint $table) {
            $table->id();
			$table->unsignedBigInteger('service_id');
			$table->string('locale');
			$table->string('name');
			$table->text('description');
			$table->json('characteristics');
			$table->json('prices');
			$table->text('price_conditions_text');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_texts');
    }
};
