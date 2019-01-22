<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'Event';

    /**
     * Run the migrations.
     * @table Event
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('ID');
            $table->string('name', 45);
            $table->longText('description');
            $table->integer('EventType_ID');
            $table->integer('EventStatus_ID');
            $table->integer('Media_ID');
            $table->integer('User_ID');

            $table->index(["Media_ID"], 'fk_Event_Media1_idx');

            $table->index(["User_ID"], 'fk_Event_User1_idx');

            $table->index(["EventStatus_ID"], 'fk_Event_EventStatus1_idx');

            $table->index(["EventType_ID"], 'fk_Event_EventType_idx');


            $table->foreign('EventType_ID', 'fk_Event_EventType_idx')
                ->references('ID')->on('EventType')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('EventStatus_ID', 'fk_Event_EventStatus1_idx')
                ->references('ID')->on('EventStatus')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('Media_ID', 'fk_Event_Media1_idx')
                ->references('ID')->on('Media')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('User_ID', 'fk_Event_User1_idx')
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