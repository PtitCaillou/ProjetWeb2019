<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'User';

    /**
     * Run the migrations.
     * @table User
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('ID');
            $table->string('lastname', 45);
            $table->string('name', 45);
            $table->string('email', 45);
            $table->string('password', 45);
            $table->integer('UserStatus_ID');

            $table->index(["UserStatus_ID"], 'fk_User_UserStatus1_idx');


            $table->foreign('UserStatus_ID', 'fk_User_UserStatus1_idx')
                ->references('ID')->on('UserStatus')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->set_schema_table);
     }
}