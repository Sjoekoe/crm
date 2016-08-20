<?php
namespace App\Invoices;

interface Invoice
{
    const TABLE = 'invoices';

    /**
     * @return int
     */
    public function id();

    /**
     * @return \App\Clients\Client
     */
    public function client();

    /**
     * @return \App\Contacts\Contact
     */
    public function contact();

    /**
     * @return string
     */
    public function number();

    /**
     * @return int
     */
    public function status();

    /**
     * @return int
     */
    public function amount();

    /**
     * @return int
     */
    public function vat();

    /**
     * @return int
     */
    public function amountWithVat();

    /**
     * @return int
     */
    public function amountLeft();

    /**
     * @return int
     */
    public function amountOpen();

    /**
     * @return array
     */
    public function timedReminders();

    /**
     * @return string
     */
    public function payPalUrl();

    /**
     * @return int
     */
    public function quarter();

    /**
     * @return \Carbon\Carbon
     */
    public function createdAt();

    /**
     * @return \Carbon\Carbon
     */
    public function updatedAt();
}
