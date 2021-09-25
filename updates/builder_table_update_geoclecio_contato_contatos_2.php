<?php namespace Geoclecio\Contato\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGeoclecioContatoContatos2 extends Migration
{
    public function up()
    {
        Schema::table('geoclecio_contato_contatos', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('geoclecio_contato_contatos', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
}
