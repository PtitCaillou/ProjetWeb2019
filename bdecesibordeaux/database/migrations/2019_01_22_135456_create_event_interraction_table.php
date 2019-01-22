<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventinterractionTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'EventInterraction';

    /**
     * Run the migrations.
     * @table EventInterraction
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('ID');
            $table->integer('Event_ID');
            $table->integer('InterractionType_ID');
            $table->integer('User_ID');
            $table->longText('content');

            $table->index(["InterractionType_ID"], 'fk_EventInterraction_InterractionType1_idx');

            $table->index(["User_ID"], 'fk_EventInterraction_User1_idx');

            $table->index(["Event_ID"], 'fk_EventInterraction_Event1_idx');


            $table->foreign('Event_ID', 'fk_EventInterraction_Event1_idx')
                ->references('ID')->on('Event')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('InterractionType_ID', 'fk_EventInterraction_InterractionType1_idx')
                ->references('ID')->on('InterractionType')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('User_ID', 'fk_EventInterraction_User1_idx')
                ->references('ID')->on('User')
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