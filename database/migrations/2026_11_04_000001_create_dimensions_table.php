<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('dimensions', function (Blueprint $t) {
            $t->id();
            $t->string('slug')->unique();
            $t->string('name');
            $t->string('color');              // green|yellow|pink|red|blue
            $t->text('intro');
            $t->unsignedTinyInteger('sort');          // volgorde in bloem/menu
            $t->unsignedTinyInteger('research_rank'); // 1 = meest onderzocht
            $t->timestamps();
        });

        Schema::create('cards', function (Blueprint $t) {
            $t->id();
            $t->foreignId('dimension_id')->constrained()->cascadeOnDelete();
            $t->string('type');               // bevindingen|hiaten|minimumstandaarden
            $t->string('source')->nullable();
            $t->json('methods');              // ["field","literature"]
            $t->json('items');                // lijst met punten
            $t->unsignedTinyInteger('sort')->default(0);
            $t->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cards');
        Schema::dropIfExists('dimensions');
    }
};
