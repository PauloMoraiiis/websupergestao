<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterFornecedoresNovaColunaSiteComAfter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Adicionando coluna site após coluna nome
        Schema::table('fornecedores', function(Blueprint $table){
            $table->string('site', 150)->after('nome')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //revertendo adição da coluna site
        Schema::table('fornecedores', function(Blueprint $table){
            $table->dropColumn('site');

        });
    }
}
