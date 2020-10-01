<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sysconf_id');
            $table->unsignedBigInteger('customer_id');
            $table->date('date');
            $table->string('numeration');
            $table->string('attention');
            $table->string('validate_day');
            $table->string('project');
            $table->longText('description');
            $table->decimal('cost',20,5);
            $table->decimal('tax',20,5);
            $table->decimal('subtotal',20,5);
            $table->decimal('total',20,5);
            $table->timestamps();
          $table->engine = "InnoDB";
          $table->charset = 'utf8';
          $table->collation = 'utf8_general_ci';

          $table->foreign('sysconf_id')->references('id')->on('sysconfs');
          $table->foreign('customer_id')->references('id')->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quotations');
    }
}
