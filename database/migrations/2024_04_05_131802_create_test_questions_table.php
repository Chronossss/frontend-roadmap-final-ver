<?php

use App\Models\Test;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('test_questions', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Test::class)->constrained()->cascadeOnDelete();
            $table->string('question');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('test_questions');
    }
};
