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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->string('title');
            $table->string('keyword')->nullable();
            $table->string('description')->nullable();
            $table->string('company')->nullable();
            $table->longText('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('fax')->nullable();
            $table->string('email')->nullable();
            $table->string('smtpserver')->nullable();
            $table->string('smtpemail')->nullable();
            $table->string('smtppassword')->nullable();
            $table->string('smtpport')->nullable();
            $table->string('facebook',length: 100)->nullable();
            $table->string('instagram',length: 100)->nullable();
            $table->string('twitter',length: 100)->nullable();
            $table->text('aboutus')->nullable();
            $table->text('contact')->nullable();
            $table->text('references')->nullable();
            $table->string('icon',length: 60)->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('settings');
    }
};
