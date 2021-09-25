<?php namespace Geoclecio\Contato\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateGeoclecioContatoContatos2 extends Migration
{
    public function up()
    {
        Schema::create('geoclecio_contato_contatos', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('nome', 150);
            $table->string('email', 100);
            $table->string('telefone', 14);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('geoclecio_contato_contatos');
    }
}
