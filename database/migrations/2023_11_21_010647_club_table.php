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
        Schema::create('club', function (Blueprint $table) {
            $table->id();
            $table -> integer ('trophy') -> unique();
            $table -> string('nama', 100);
            $table -> string('desc', 100);
            $table -> date('dibentuk');
            $table -> text('asal');    
            $table->timestamps();
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
