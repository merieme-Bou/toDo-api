<?php

use App\Enums\Priority;
use App\Enums\Status;
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
        Schema::create('tasks', function (Blueprint $table) {
            $table->ulid()->primary();
            $table->string('titel');

            $table->string('status')->default(Status::OPEN->value);
            $table->string('priority')->default(Priority::MEDIUM->value);

            $table->text('content')->nullable();
            $table
            ->foreignUlid('category_id')
            ->index()
            ->constrained()
            ->cascadeOnDelete();

        $table
            ->foreignUlid('user_id')
            ->index()
            ->constrained()
            ->cascadeOnDelete();

        $table->timestamp('complete_at')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
