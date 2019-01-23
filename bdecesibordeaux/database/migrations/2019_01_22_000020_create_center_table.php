<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCenterTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'center';

    /**
     * Run the migrations.
     * @table User
     *
     * @return void
     */
    public function up()
    {
        if (Schema::connection('mysql2')->hasTable($this->set_schema_table)) return;
            Schema::connection('mysql2')->create($this->set_schema_table, function (Blueprint $table) {
                $table->engine = 'InnoDB';
                $table->bigIncrements('id');
                $table->string('center', 45)->default("");
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::connection('mysql2')->dropIfExists($this->set_schema_table);
     }
}