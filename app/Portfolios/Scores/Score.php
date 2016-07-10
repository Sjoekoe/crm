<?php
namespace App\Portfolios\Scores;

interface Score
{
    const TABLE = 'portfolio_scores';

    /**
     * @return int
     */
    public function id();

    /**
     * @return \App\Portfolios\Portfolio
     */
    public function portfolio();

    /**
     * @return \App\Users\User
     */
    public function user();

    /**
     * @return \Carbon\Carbon
     */
    public function createdAt();

    /**
     * @return \Carbon\Carbon
     */
    public function updatedAt();
}
