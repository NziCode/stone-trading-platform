<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->foreignId('category_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->json('name');
            $table->string('slug')->unique();
            $table->json('description')->nullable();

            $table->json('location')->nullable(); // مثل معدن، استان، منطقه
            $table->json('dimensions')->nullable(); // طول، عرض، ارتفاع یا اطلاعات ابعادی
            $table->decimal('weight', 12, 2)->nullable();
            $table->decimal('price', 15, 2)->nullable();

            $table->enum('status', ['available', 'sold'])->default('available');
            $table->boolean('is_featured')->default(false);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
