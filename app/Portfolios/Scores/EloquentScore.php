<?php
namespace App\Portfolios\Scores;

use App\Models\StandardModel;
use App\Portfolios\EloquentPortfolio;
use App\Users\EloquentUser;
use Illuminate\Database\Eloquent\Model;

class EloquentScore extends Model implements Score
{
    use StandardModel;

    protected $table = self::TABLE;
    
    /**
     * @return \App\Portfolios\Portfolio
     */
    public function portfolio()
    {
        return $this->belongsTo(EloquentPortfolio::class, 'portfolio_id', 'id')->first();
    }

    /**
     * @return \App\Users\User
     */
    public function user()
    {
        return $this->belongsTo(EloquentUser::class, 'user_id', 'id')->first();
    }
}
