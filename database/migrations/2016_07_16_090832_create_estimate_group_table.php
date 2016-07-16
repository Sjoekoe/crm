<?php

use App\Estimates\Estimate;
use App\Estimates\Groups\EstimateGroup;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstimateGroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(EstimateGroup::TABLE, function(Blueprint $table) {
            $table->increments('id');
            $table->integer('estimate_id')->unsigned();
            $table->foreign('estimate_id')->references('id')->on(Estimate::TABLE)->onDelete('cascade');
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
        Schema::drop(EstimateGroup::TABLE);
    }
}
