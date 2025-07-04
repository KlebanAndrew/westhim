<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
	/**
	 * Run the migrations.
	 */
	public function up(): void
	{
		Schema::create('product_texts', function (Blueprint $table) {
			$table->id();
			$table->unsignedBigInteger('product_id');
			$table->string('locale');
			$table->string('short_title');
			$table->text('title');
			$table->mediumText('description');
			$table->mediumText('seo_title');
			$table->mediumText('seo_description');
			$table->json('sections');
			$table->json('seo_keywords')->nullable(); // Array of strings
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('product_texts');
	}
};
