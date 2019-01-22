<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBasketTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'Basket';

    /**
     * Run the migrations.
     * @table Basket
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('quantity');
            $table->integer('Product_ID');
            $table->integer('User_ID');

            $table->index(["Product_ID"], 'fk_Basket_Product1_idx');

            $table->index(["User_ID"], 'fk_Basket_User1_idx');


            $table->foreign('Product_ID', 'fk_Basket_Product1_idx')
                ->references('ID')->on('Product')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('User_ID', 'fk_Basket_User1_idx')
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