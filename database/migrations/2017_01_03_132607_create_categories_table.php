<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatecategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('parent_id')->nullable()->unsigned()->index()->comment('父分類');
            $table->foreign('parent_id')->references('id')->on('categories')->onDelete('cascade');
            $table->string('title',100)->comment('分類名稱'); 
            $table->string('pic',255)->nullable()->comment('分類圖片');
            $table->string('desc',500)->nullable()->comment('分類描述');
            $table->boolean('enabled')->default(true)->comment('是否啟動');
            $table->integer('sort')->comment('排序');
            $table->string('type',30)->nullable()->comment('類型');
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
        Schema::table('categories', function(Blueprint $table)
        {
            $table->dropForeign(['parent_id']);
        });
        Schema::dropIfExists('categories');
    }
}
