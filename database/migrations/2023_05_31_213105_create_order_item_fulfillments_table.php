<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pos_order_item_fulfillments', function (Blueprint $table) {
            $table->id();
            $table->integer('order_id');
            $table->integer('grn_id');
            $table->integer('quantity');
            $table->integer('fulfilled_by')->nullable();
            $table->timestamp('fulfilled_at')->nullable();
            $table->integer('created_by');
            $table->integer('updated_by');
            $table->timestamps();
            $table->integer('deleted_by')->nullable();
            $table->softDeletes();
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('order_item_fulfillments');
    }
};
