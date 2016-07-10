<?php
namespace App\Portfolios;

interface Portfolio
{
    const TABLE = 'portfolios';
    
    /**
     * @return mixed
     */
    public function id();

    /**
     * @return string
     */
    public function url();

    /**
     * @return \App\Portfolios\Scores\Score[]
     */
    public function scores();

    /**
     * @return mixed
     */
    public function createdAt();

    /**
     * @return mixed
     */
    public function updatedAt();
}
