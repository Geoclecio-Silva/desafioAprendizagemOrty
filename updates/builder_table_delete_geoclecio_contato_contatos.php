<?php namespace Geoclecio\Contato\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteGeoclecioContatoContatos extends Migration
{
    public function up()
    {
        Schema::dropIfExists('geoclecio_contato_contatos');
    }
    
    public function down()
    {
        Schema::create('geoclecio_contato_contatos', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('nome', 150);
            $table->string('email', 100);
            $table->text('telefone');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
}
