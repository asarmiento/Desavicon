<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailsQuotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details_quotes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('quote_id');
            $table->decimal('quantity',20,3);
            $table->decimal('cost',20,3);
            $table->string('level');
            $table->string('location');
            $table->string('reference');
            $table->string('width_m');
            $table->string('high_m');
            $table->string('area_m');
            $table->string('design');
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
        Schema::dropIfExists('details_quotes');
    }
}
