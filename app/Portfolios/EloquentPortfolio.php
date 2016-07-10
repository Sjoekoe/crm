<?php
namespace App\Portfolios;

use App\Models\StandardModel;
use App\Portfolios\Scores\EloquentScore;
use Illuminate\Database\Eloquent\Model;

class EloquentPortfolio extends Model implements Portfolio
{
    use StandardModel;

    /**
     * @var string
     */
    protected $table = self::TABLE;
    
    /**
     * @return string
     */
    public function url()
    {
        return $this->url;
    }

    /**
     * @return \App\Portfolios\Scores\Score[]
     */
    public function scores()
    {
        return $this->hasMany(EloquentScore::class, 'portfolio_id', 'id');
    }
}
