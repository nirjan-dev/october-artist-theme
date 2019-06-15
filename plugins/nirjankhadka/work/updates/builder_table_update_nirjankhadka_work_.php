<?php namespace Nirjankhadka\Work\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNirjankhadkaWork extends Migration
{
    public function up()
    {
        Schema::table('nirjankhadka_work_', function($table)
        {
            $table->boolean('visible')->default(1);
            $table->string('type')->change();
            $table->string('employer')->change();
        });
    }
    
    public function down()
    {
        Schema::table('nirjankhadka_work_', function($table)
        {
            $table->dropColumn('visible');
            $table->string('type', 191)->change();
            $table->string('employer', 191)->change();
        });
    }
}
