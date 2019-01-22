<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediainterractionTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'MediaInterraction';

    /**
     * Run the migrations.
     * @table MediaInterraction
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('ID');
            $table->integer('Media_ID');
            $table->integer('User_ID');
            $table->integer('InterractionType_ID');
            $table->longText('content');

            $table->index(["User_ID"], 'fk_MediaInterraction_User1_idx');

            $table->index(["InterractionType_ID"], 'fk_MediaInterraction_InterractionType1_idx');

            $table->index(["Media_ID"], 'fk_MediaInterraction_Media1_idx');


            $table->foreign('Media_ID', 'fk_MediaInterraction_Media1_idx')
                ->references('ID')->on('Media')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('User_ID', 'fk_MediaInterraction_User1_idx')
                ->references('ID')->on('User')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('InterractionType_ID', 'fk_MediaInterraction_InterractionType1_idx')
                ->references('ID')->on('InterractionType')
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