<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesQuotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images_quotes', function (Blueprint $table) {
            $table->id();
          $table->unsignedBigInteger('quote_id');
           $table->string('name');
          $table->string('url');
          $table->string('type');
          $table->timestamps();
          $table->engine = "InnoDB";
          $table->charset = 'utf8';
          $table->collation = 'utf8_general_ci';

          $table->foreign('quote_id')->references('id')->on('quotations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images_quotes');
    }
}
