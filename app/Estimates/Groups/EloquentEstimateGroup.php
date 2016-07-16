<?php
namespace App\Estimates\Groups;

use App\Estimates\EloquentEstimate;
use App\Estimates\Items\EloquentEstimateItem;
use App\Models\StandardModel;
use Illuminate\Database\Eloquent\Model;

class EloquentEstimateGroup extends Model implements EstimateGroup
{
    use StandardModel;

    protected $table = self::TABLE;

    /**
     * @return \App\Estimates\Estimate
     */
    public function estimate()
    {
        return $this->belongsTo(EloquentEstimate::class, 'estimate_id', 'id')->first();
    }

    /**
     * @return \App\Estimates\Items\EstimateItem[]
     */
    public function items()
    {
        return $this->hasMany(EloquentEstimateItem::class, 'group_id', 'id')->get();
    }

    /**
     * @return int
     */
    public function amount()
    {
        $amount = 0;

        foreach ($this->items() as $item) {
            $amount += $item->amount();
        }

        return $amount;
    }
}
