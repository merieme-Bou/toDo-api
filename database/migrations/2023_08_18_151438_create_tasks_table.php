<?php

declare(strict_types=1);

use App\Enums\Priority;
use App\Enums\Status;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        Schema::create('tasks', static function (Blueprint $table): void {
            $table->id('id');

            $table->string('title');
            $table->string('status')->default(Status::OPEN->value);
            $table->string('priority')->default(Priority::MEDIUM->value);

            $table->text('content')->nullable();

            $table
                ->foreignid('category_id')
                ->constrained('categories')
                ->cascadeOnDelete();

            $table
                ->foreignid('user_id')
                ->constrained('users')
                ->cascadeOnDelete();

            $table->timestamp('complete_at')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
