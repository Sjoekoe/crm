<?php

use App\Addresses\Address;
use App\Companies\Company;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Address::TABLE, function (Blueprint $table) {
            $table->increments('id');
            $table->string('street');
            $table->string('address_line_2');
            $table->string('zip');
            $table->string('state');
            $table->string('country');
            $table->string('longitude');
            $table->string('latitude');
            $table->timestamps();
        });

        Schema::table(Company::TABLE, function (Blueprint $table) {
            $table->integer('address_id')->unsigned()->nullable();
            $table->foreign('address_id')->references('id')->on(Address::TABLE)->onDeelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table(Company::TABLE, function (Blueprint $table) {
            $table->dropForeign('companies_address_id_foreign');
            $table->dropColumn('address_id');
        });

        Schema::drop(Address::TABLE);
    }
}
