<?php

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    public function up()
    {
        Schema::create('rich_texts', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->morphs('record');
            $table->string('field');
            $table->longText('body')->nullable();
            $table->timestamps();

            $table->unique(['field', 'record_type', 'record_id']);
        });
    }
};
