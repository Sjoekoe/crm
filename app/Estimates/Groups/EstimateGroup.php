<?php
namespace App\Estimates\Groups;

interface EstimateGroup
{
    const TABLE = 'estimate_groups';
    
    /**
     * @return int
     */
    public function id();

    /**
     * @return \App\Estimates\Estimate
     */
    public function estimate();

    /**
     * @return \App\Estimates\Items\EstimateItem[]
     */
    public function items();

    /**
     * @return int
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
