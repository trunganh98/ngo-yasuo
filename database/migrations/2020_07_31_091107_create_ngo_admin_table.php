<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNgoAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ngo_admin', function (Blueprint $table) {
            $table->increments('admin_id');
            $table->string('admin_name');
            $table->string('admin_email')->unique()->nullable();
            $table->string('password');
            $table->integer('phone')->unique();
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
        Schema::dropIfExists('ngo_admin');
    }
}
