<?php
namespace App\Accelerator;

interface Accelerator
{
    const TABLE = 'accelerators';
    
    /**
     * @return int
     */
    public function id();

    /**
     * @return \Carbon\Carbon
     */
    public function createdAt();

    /**
     * @return \Carbon\Carbon
     */
    public function updatedAt();
}
