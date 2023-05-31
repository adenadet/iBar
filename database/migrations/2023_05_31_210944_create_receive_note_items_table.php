<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('inventory_receive_note_items', function (Blueprint $table) {
            $table->id();
            $table->integer('purchase_order_id');
            $table->integer('receive_note_id');
            $table->integer('item_id');
            $table->integer('quantity');
            $table->string('batch_number')->nullable();
            $table->date('expiry_date')->nullable();
            $table->integer('consumed')->nullable();
            $table->timestamps();
            $table->integer('deleted_by');
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('inventory_receive_note_items');
    }
};
