<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('inventory_vendor_contact_people', function (Blueprint $table) {
            $table->id();
            $table->integer('vendor_id');
            $table->string('cp_name');
            $table->string('cp_email');
            $table->string('cp_number');
            $table->boolean('primary_contact');
            $table->integer('created_by');
            $table->integer('updated_by');
            $table->timestamps();
            $table->integer('deleted_by')->nullable();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('inventory_vendor_contact_people');
    }
};
