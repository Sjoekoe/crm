<?php
namespace App\Companies;

interface Company
{
    const TABLE = 'companies';

    /**
     * @return int
     */
    public function id();

    /**
     * @return string
     */
    public function name();

    /**
     * @return int
     */
    public function legalType();

    /**
     * @return string
     */
    public function vat();

    /**
     * @return int
     */
    public function taxes();

    /**
     * @return int
     */
    public function paymentTerms();

    /**
     * @return \App\Clients\Client[]
     */
    public function clients();

    /**
     * @return \App\Addresses\Address
     */
    public function address();

    /**
     * @return \Carbon\Carbon
     */
    public function createdAt();

    /**
     * @return \Carbon\Carbon
     */
    public function updatedAt();
}
