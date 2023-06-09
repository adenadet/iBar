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
        Schema::create('inventory_vendor_account_information', function (Blueprint $table) {
            $table->id();
            $table->integer('vendor_id');
            $table->integer('bank_id');
            $table->string('account_name');
            $table->string('account_number');
            $table->string('status');
            $table->integer('created_by');
            $table->integer('updated_by');
            $table->timestamps();
            $table->integer('deleted_by')->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory_vendor_account_information');
    }
};
