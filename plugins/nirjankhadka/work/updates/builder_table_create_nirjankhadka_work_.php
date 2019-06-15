<?php namespace Nirjankhadka\Work\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNirjankhadkaWork extends Migration
{
    public function up()
    {
        Schema::create('nirjankhadka_work_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->string('type');
            $table->string('employer');
            $table->primary(['id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nirjankhadka_work_');
    }
}
