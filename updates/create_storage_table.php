<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStorageTable extends Migration
{
    // 这里可以指定你的数据库连接
    public function getConnection()
    {
        return config('database.connection') ?: config('database.default');
    }

    public function up()
    {
        if (!Schema::hasTable('fm_storage')) {
            Schema::create('fm_storage', function (Blueprint $table) {
                $table->bigIncrements('id')->unsigned();

                $table->string('path');
                $table->string('realname');
                $table->string('type');

                $table->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('fm_storage');
    }
}
