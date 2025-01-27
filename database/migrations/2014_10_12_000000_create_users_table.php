<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string("telephone")->nullable();
            $table->boolean("is_super_admin")->default(false);
            $table->boolean("is_active")->default(true);
            $table->string('national_id')->nullable();
            $table->string('nid_attachment')->nullable();
            $table->string('photo')->nullable();
            $table->string('gender')->nullable();
            $table->boolean('is_citizen')->default('false');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
