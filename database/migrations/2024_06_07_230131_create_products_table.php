<?php

use App\Models\Category;
use App\Models\Soldes;
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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Category::class);
            $table->string('designation');
            $table->integer('prix');
            $table->integer('stock');
            $table->text('description');
            $table->foreignIdFor(Soldes::class);
            $table->string('image_one');
            $table->string('image_two');
            $table->string('image_third');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
