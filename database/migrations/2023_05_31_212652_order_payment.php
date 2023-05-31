<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pos_order_payments', function (Blueprint $table) {
            $table->id();
            $table->integer('order_id');
            $table->integer('payment_type_id');
            $table->float('amount');
            $table->integer('created_by');
            $table->integer('updated_by');
            $table->timestamps();
            $table->integer('deleted_by')->nullable();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pos_order_payments');
    }
};
