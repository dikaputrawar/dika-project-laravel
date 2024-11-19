<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyUserIdNullable extends Migration
{
    public function up()
    {
        Schema::table('myprojects', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable()->change(); // Mengubah user_id menjadi nullable
        });
    }

    public function down()
    {
        Schema::table('myprojects', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable(false)->change(); // Mengembalikan ke wajib isi
        });
    }
}
