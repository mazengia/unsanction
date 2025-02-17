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
    {                                     //Schema::create('users', function (Blueprint $table) {
        Schema::create('users', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('name')->unique();
            //$table->string('role')->;
           // $table->string('email')->unique();
           // $table->timestamp('email_verified_at')->nullable();
            $table->string('password');          
            $table->timestamps();
        });
    }
        public function roles()
            {
                return $this
                    ->belongsToMany('App\Role')
                    ->withTimestamps();
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
