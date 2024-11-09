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
        Schema::create('organizations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer("experience");
            $table->string("details");
            $table->string("skils");
            $table->string("logo")->default("no image");
            $table->string("view");
            $table->string("message");
            $table->string("number");
            $table->string("socials");
            $table->string("address");
            $table->string("phone");
            $table->string("complaints");
            $table->string("suggests");
            // $table->unsignedBigInteger("user_id");
            $table->foreignId("user_id")->references('id')->on('users')->onDelete('cascade');
            
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organizations');
    }
};
