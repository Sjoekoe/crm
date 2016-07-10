<?php
namespace App\Companies;

use App\Addresses\EloquentAddress;
use App\Models\StandardModel;
use Illuminate\Database\Eloquent\Model;

class EloquentCompany extends Model implements Company
{
    use StandardModel;

    /**
     * @var string
     */
    protected $table = self::TABLE;

    /**
     * @return string
     */
    public function name()
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function legalType()
    {
        return $this->legal_type;
    }

    /**
     * @return string
     */
    public function vat()
    {
        return $this->vat;
    }

    /**
     * @return int
     */
    public function taxes()
    {
        return $this->taxes;
    }

    /**
     * @return int
     */
    public function paymentTerms()
    {
        return $this->payment_terms;
    }

    /**
     * @return \App\Clients\Client[]
     */
    public function clients()
    {
        return $this->hasMany(EloquentCompany::class, 'company_id', 'id')->get();
    }

    /**
     * @return \App\Addresses\Address
     */
    public function address()
    {
        return $this->hasOne(EloquentAddress::class, 'id', 'address_id')->first();
    }
}
