<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list', function (Blueprint $table) {
            $table->id();
            $table->integer('recruitment year')->comment('徵求年度');
            $table->string('application start date')->comment('申請開始日');
            $table->string('application deadline')->comment('申請截止日');
            $table->string('project name')->comment('計畫名稱');
            $table->string('country')->comment('國家');
            $table->string('agreement agency')->comment('協議機構');
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
        Schema::dropIfExists('list');
    }
}
