<?php namespace Geoclecio\Contato\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGeoclecioContatoContatos3 extends Migration
{
    public function up()
    {
        Schema::table('geoclecio_contato_contatos', function($table)
        {
            $table->text('telefone')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('geoclecio_contato_contatos', function($table)
        {
            $table->integer('telefone')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
