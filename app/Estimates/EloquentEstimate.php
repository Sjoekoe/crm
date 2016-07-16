<?php
namespace App\Estimates;

use App\Clients\EloquentClient;
use App\Estimates\Groups\EloquentEstimateGroup;
use App\Models\StandardModel;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class EloquentEstimate extends Model implements Estimate
{
    use StandardModel;

    protected $table = self::TABLE;

    /**
     * @return \App\Clients\Client
     */
    public function client()
    {
        return $this->belongsTo(EloquentClient::class, 'client_id', 'id')->first();
    }

    /**
     * @return int
     */
    public function status()
    {
        return $this->status;
    }

    /**
     * @return \Carbon\Carbon
     */
    public function expiryDate()
    {
        return Carbon::parse($this->expiry_date);
    }

    /**
     * @return string
     */
    public function detail()
    {
        return $this->detail;
    }

    /**
     * @return string
     */
    public function invoiced()
    {
        return $this->invoiced;
    }

    /**
     * @return string
     */
    public function number()
    {
        return $this->number;
    }

    /**
     * @return \App\Estimates\Groups\EstimateGroup[]
     */
    public function groups()
    {
        return $this->hasMany(EloquentEstimateGroup::class, 'estimate_id', 'id')->get();
    }

    /**
     * @return string
     */
    public function toStatus()
    {
        switch ($this->status()) {
            case self::DRAFT:
                return 'draft';

            case self::SENT:
                return 'sent';

            case self::APPROVED:
                return 'approved';

            case self::DECLINED:
                return 'declined';

            case self::MODIFIED:
                return 'modified';
        }
    }

    /**
     * @return int
     */
    public function amount()
    {
        $result = 0;

        foreach ($this->groups() as $group) {
            $result += $group->amount();
        }

        return $result;
    }

    /**
     * @return bool
     */
    public function hasOpenDebt()
    {
        return round($this->amount() * 100) != round($this->invoiced() * 100);
    }
}
