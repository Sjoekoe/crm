<?php

use App\Clients\Client;
use App\Estimates\Estimate;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstimatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Estimate::TABLE, function (Blueprint $table) {
            $table->increments('id');
            $table->integer('client_id')->unsigned();
            $table->foreign('client_id')->references('id')->on(Client::TABLE)->onDelete('cascade');
            $table->integer('status');
            $table->timestamp('expiry_date');
            $table->string('detail');
            $table->string('invoiced');
            $table->string('number');
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
        Schema::drop(Estimate::TABLE);
    }
}
