<?php namespace Nirjankhadka\Work\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNirjankhadkaWork4 extends Migration
{
    public function up()
    {
        Schema::table('nirjankhadka_work_', function($table)
        {
            $table->string('link', 191);
            $table->text('desc');
        });
    }
    
    public function down()
    {
        Schema::table('nirjankhadka_work_', function($table)
        {
            $table->dropColumn('link');
            $table->dropColumn('desc');
        });
    }
}
