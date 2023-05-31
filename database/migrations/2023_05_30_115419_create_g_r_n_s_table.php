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
        Schema::create('inventory_receive_notes', function (Blueprint $table) {
            $table->id();
            $table->integer('purchase_order_id');
            $table->string('unique_id');
            $table->date('received_at');
            $table->integer('received_by');
            $table->integer('confirmed_by');
            $table->date('confirmed_at');
            $table->integer('created_by');
            $table->integer('updated_by');
            $table->timestamps();
            $table->integer('deleted_by');
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('inventory_receive_notes');
    }
};
