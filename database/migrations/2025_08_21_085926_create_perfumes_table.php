<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('perfumes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('profile_pic')->nullable();
            $table->text('description');
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->foreignId('supplier_id')->constrained()->onDelete('cascade');
            $table->integer('stock_quantity')->default(0);
            $table->date('buying_date');
            $table->date('expire_date');
            $table->decimal('buying_price', 10, 2);
            $table->decimal('retail_price', 10, 2);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('perfumes');
    }
};