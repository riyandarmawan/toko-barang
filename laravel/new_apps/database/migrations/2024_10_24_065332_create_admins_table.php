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
        Schema::create('admins', function (Blueprint $table) {
            $table->tinyInteger('id_admin');
            $table->string('username', 35)->unique();
            $table->string('password', 100);
            $table->enum('role', ['admin', 'kasir']);
            $table->timestamps();
            $table->softDeletes();

            $table->primary('id_admin');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
