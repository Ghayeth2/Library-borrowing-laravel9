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
        Schema::create('borrowings', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer('book_id');
            $table->integer('user_id');
            $table->string('name');
            $table->string('address',length: 200);
            $table->string('email',length: 65);
            $table->string('bookdate');
            $table->string('returndate');
            $table->integer('days');
            $table->string('ip');
            $table->string('note');
            $table->string('status',length: 7);
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
        Schema::dropIfExists('borrowings');
    }
};
