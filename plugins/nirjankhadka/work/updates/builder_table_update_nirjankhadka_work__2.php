<?php namespace Nirjankhadka\Work\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNirjankhadkaWork2 extends Migration
{
    public function up()
    {
        Schema::table('nirjankhadka_work_', function($table)
        {
            $table->increments('id')->change();
        });
    }
    
    public function down()
    {
        Schema::table('nirjankhadka_work_', function($table)
        {
            $table->integer('id')->change();
        });
    }
}
