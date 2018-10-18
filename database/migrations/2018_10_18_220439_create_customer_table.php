<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('user_id')->unsigned()->unique();
            $table->char('father_name');
            $table->string('home_no','15')->nullable();
            $table->boolean('is_approved');
            $table->string('occupation');
            $table->string('witness1_name','30')->nullable();
            $table->string('witness1_no','12')->nullable();
            $table->string('witness1_add')->nullable();
            $table->string('cnic','13')->nullable();

            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('customer');
    }
}
