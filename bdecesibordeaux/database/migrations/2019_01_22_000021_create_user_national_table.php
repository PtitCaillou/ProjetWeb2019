<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserNationalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public $set_schema_table = 'user';

    public function up()
    {
        if (Schema::connection('mysql2')->hasTable($this->set_schema_table)) return;
        Schema::connection('mysql2')->create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('ID');
            $table->string('lastname', 45);
            $table->string('name', 45);
            $table->string('email', 45);
            $table->string('password', 100);
            $table->integer('Center_ID')->default('1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
