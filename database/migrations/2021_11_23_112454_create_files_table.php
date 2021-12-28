<?php
  
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->string('filenames1');
            $table->string('filenames2');
            $table->string('filenames3');
            $table->string('filenames4');
            $table->string('filenames5');
            $table->string('filenames6');
            $table->string('titre');
            $table->string('sous_titre');
            $table->text('desc_1');
            $table->text('desc_2');
            $table->text('video');
            $table->float('prix');
            $table->integer('nbr_perso');
            $table->string('airport');
            $table->date('date_depart');
            $table->timestamps();
            
        });
    }
  
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('files');
    }
}