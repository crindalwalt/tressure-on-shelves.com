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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->text("description");
            $table->string("slug")->nullable();
            $table->string("image");
            $table->string("price");
            $table->string("old_price")->nullable();
            $table->string("category_id");
            $table->string("user_id");
            $table->string("rating")->nullable();
            $table->enum("status",["pending","active","cancelled"])->default("pending");

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
