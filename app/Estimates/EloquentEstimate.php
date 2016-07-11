<?php
namespace App\Estimates;

use App\Clients\EloquentClient;
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
    public function amount()
    {
        return $this->amount;
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
}
