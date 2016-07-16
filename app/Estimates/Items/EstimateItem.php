<?php
namespace App\Estimates\Items;

interface EstimateItem
{
    const TABLE = 'estimate_item';

    /**
     * @return int
     */
    public function id();

    /**
     * @return \App\Estimates\Groups\EstimateGroup
     */
    public function group();

    /**
     * @return float
     */
    public function amount();

    /**
     * @return \Carbon\Carbon
     */
    public function createdAt();

    /**
     * @return \Carbon\Carbon
     */
    public function updatedAt();
}
