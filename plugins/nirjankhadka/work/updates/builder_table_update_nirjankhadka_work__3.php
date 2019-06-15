<?php namespace Nirjankhadka\Work\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNirjankhadkaWork3 extends Migration
{
    public function up()
    {
        Schema::table('nirjankhadka_work_', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
            $table->boolean('visible')->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('nirjankhadka_work_', function($table)
        {
            $table->increments('id')->unsigned()->change();
            $table->boolean('visible')->default(1)->change();
        });
    }
}
