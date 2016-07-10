<?php

use App\Clients\Client;
use App\Users\User;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Client::TABLE, function (Blueprint $table) {
            $table->increments('id');
            $table->string('label');
            $table->integer('status');
            $table->integer('source');
            $table->integer('account_manager_id')->unsigned()->nullable();
            $table->foreign('account_manager_id')->references('id')->on(User::TABLE)->onDelete('set null');
            $table->string('source_remarks');
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
        Schema::drop(Client::TABLE);
    }
}
