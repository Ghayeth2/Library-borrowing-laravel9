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
        Schema::create('borrow_mains', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId('book_id');
            $table->foreignId('user_id');
            $table->date('bookdate');
            $table->date('returndate');
            $table->integer('days');
            $table->string('ip',length: 30);
            $table->string('status' ,  25)->nullable()->default('new');
            $table->string('note' ,  60)->nullable();
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
        Schema::dropIfExists('borrow_mains');
    }
};
