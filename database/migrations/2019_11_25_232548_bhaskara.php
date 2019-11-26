<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaAlunos extends Migration
{
    public function up()
    {
        	Schema::create('bask', function (Blueprint $table)
	 {
           		$table->increments('id');
            		$table->string('question', 80);
                    $table->string('coef_a', 80);
                    $table->string('coef_b', 80);
                    $table->string('coef_c', 80);
                    $table->string('delta', 80);
                    $table->string('x1', 80);
                    $table->string('x2', 80);
                    
            		$table->timestamps();
        	});
    }

    public function down()
    {
        	Schema::dropIfExists('bask');
    }
}