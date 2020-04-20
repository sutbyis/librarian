<?php
 
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
 
class CreateCSVimportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('csvimports', function (Blueprint $table) {
            //$table->increments('id');
            $table->string('name',50);
            $table->datetime('reserved_date')->nullable();
            $table->datetime('checkin_date')->nullable();
            $table->integer('total_price')->nullable();
        });
    }
 
    public function down()
    {
        Schema::drop('csvimports');
    }
}