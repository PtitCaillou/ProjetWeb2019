<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventinfoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'EventInfo';

    /**
     * Run the migrations.
     * @table EventInfo
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('ID');
            $table->dateTime('date');
            $table->integer('price');
            $table->integer('Event_ID');
            $table->string('location', 100);

            $table->index(["Event_ID"], 'fk_EventInfo_Event1_idx');


            $table->foreign('Event_ID', 'fk_EventInfo_Event1_idx')
                ->references('ID')->on('Event')
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