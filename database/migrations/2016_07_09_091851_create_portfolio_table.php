<?php

use App\Portfolios\Portfolio;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfolioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Portfolio::TABLE, function (Blueprint $table) {
            $table->increments('id');
            $table->string('url');
            $table->text('notes');
            $table->timestamp('release_date');
            $table->integer('budget');
            $table->integer('timing');
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
        Schema::drop(Portfolio::TABLE);
    }
}
