<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('category');
            $table->string('description');
            $table->string('tag');

            //DARI MODEL IMAGE
            $table->string('image')->nullable();
            // $table->string('caption');
            // $table->string('credit');

            $table->string('author');
            $table->boolean('headline');
            $table->boolean('recomendation');
            $table->string('status');
            $table->longText('count');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
};
