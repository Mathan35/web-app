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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('job_id')->unique()->nullable();
            $table->integer('hot_job')->nullable();
            $table->string('company_name')->nullable();
            $table->string('job_title')->nullable();
            $table->longText('content')->nullable();
            $table->string('description_url')->nullable();
            $table->string('salary')->nullable();
            $table->string('company_logo')->nullable();
            $table->string('location')->nullable();
            $table->string('start_ex')->nullable();
            $table->string('end_ex')->nullable();
            $table->string('job_type')->nullable();
            $table->string('category')->nullable();
            $table->string('created_by')->nullable();
            $table->integer('total_views')->nullable();
            $table->integer('auth_user_views')->nullable();
            $table->string('status')->nullable();
            $table->timestamp('status_changed_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
