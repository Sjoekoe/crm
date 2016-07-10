<?php

use App\Clients\Client;
use App\Companies\Company;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Company::TABLE, function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('legal_type');
            $table->string('vat');
            $table->integer('taxes');
            $table->integer('payment_terms');
            $table->timestamps();
        });

        Schema::table(Client::TABLE, function (Blueprint $table) {
            $table->integer('company_id')->unsigned()->nullable();
            $table->foreign('company_id')->references('id')->on(Company::TABLE)->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table(Client::TABLE, function (Blueprint $table) {
            $table->dropForeign('clients_company_id_foreign');
            $table->dropColumn('company_id');
        });

        Schema::drop(Company::TABLE);
    }
}
