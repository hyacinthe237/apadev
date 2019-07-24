<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->integer('role_id')->default(3);
            $table->integer('association_id')->nullable();
            $table->bigInteger('number')->index();
            $table->string('firstname');
            $table->string('lastname')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('fonction')->nullable();
            $table->string('profession')->nullable();
            $table->string('cni');
            $table->string('sex')->nullable();
            $table->string('dob')->nullable();
            $table->boolean('is_active')->default(true);
            $table->string('address')->nullable();
            $table->string('photo')->nullable();
            $table->text('description')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
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
