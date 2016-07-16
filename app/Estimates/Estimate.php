<?php
namespace App\Estimates;

interface Estimate
{
    const TABLE = 'estimates';

    const DRAFT = 0;
    const SENT = 1;
    const APPROVED = 2;
    const DECLINED = 3;
    const MODIFIED = 4;

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
     * @return \App\Estimates\Groups\EstimateGroup[]
     */
    public function groups();

    /**
     * @return \Carbon\Carbon
     */
    public function createdAt();

    /**
     * @return \Carbon\Carbon
     */
    public function updatedAt();

    /**
     * @return string
     */
    public function toStatus();
}
