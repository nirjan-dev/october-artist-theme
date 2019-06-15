<?php namespace Nirjankhadka\Work\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNirjankhadkaWork5 extends Migration
{
    public function up()
    {
        Schema::table('nirjankhadka_work_', function($table)
        {
            $table->string('slug')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('nirjankhadka_work_', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
