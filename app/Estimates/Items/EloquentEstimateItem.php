<?php
namespace App\Estimates\Items;

use App\Estimates\Groups\EloquentEstimateGroup;
use App\Models\StandardModel;
use Illuminate\Database\Eloquent\Model;

class EloquentEstimateItem extends Model implements EstimateItem
{
    use StandardModel;
    
    /**
     * @var string
     */
    protected $table = self::TABLE;

    /**
     * @return \App\Estimates\Groups\EstimateGroup
     */
    public function group()
    {
        return $this->belongsTo(EloquentEstimateGroup::class, 'group_id', 'id')->first();
    }

    /**
     * @return float
     */
    public function amount()
    {
        return $this->amount;
    }
}
