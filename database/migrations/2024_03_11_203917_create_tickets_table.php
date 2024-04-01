<?php

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
//use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('ticket_number')->unique();
            $table->string('ticket_message')->nullable('false');
            $table->text('description');
            $table->timestamp('time_start')->default(Carbon::now()->timestamp);
            $table->timestamps('time_limit');
            $table->timestamps('time_conclusion');
            $table->integer('company');
            $table->enum();
            $table->integer('responsible');
            $table->string('path_file');
            $table->integer('submitter');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
