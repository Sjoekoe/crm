<?php
namespace App\Estimates;

interface Estimate
{
    const TABLE = 'estimates';
    
    /**
     * @return int
     */
    public function id();

    /**
     * @return \App\Clients\Client
     */
    public function client();

    /**
     * @return int
     */
    public function status();

    /**
     * @return \Carbon\Carbon
     */
    public function expiryDate();

    /**
     * @return string
     */
    public function detail();

    /**
     * @return string
     */
    public function amount();

    /**
     * @return string
     */
    public function invoiced();

    /**
     * @return string
     */
    public function number();

    /**
     * @return \Carbon\Carbon
     */
    public function createdAt();

    /**
     * @return \Carbon\Carbon
     */
    public function updatedAt();
}
