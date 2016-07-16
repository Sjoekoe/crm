<?php
namespace App\Clients;

use App\Companies\EloquentCompany;
use App\Models\StandardModel;
use App\Users\EloquentUser;
use Checklists\EloquentChecklist;
use Illuminate\Database\Eloquent\Model;

class EloquentClient extends Model implements Client
{
    use StandardModel;

    /**
     * @var string
     */
    protected $table = self::TABLE;

    /**
     * @return string
     */
    public function label()
    {
        return $this->label;
    }

    /**
     * @return int
     */
    public function status()
    {
        return $this->status;
    }

    /**
     * @return int
     */
    public function source()
    {
        return $this->source;
    }

    /**
     * @return \App\Users\User
     */
    public function accountManager()
    {
        return $this->belongsTo(EloquentUser::class, 'account_manager_id', 'id')->first();
    }

    /**
     * @return string
     */
    public function sourceRemarks()
    {
        return $this->source_remarks;
    }

    /**
     * @return \App\Companies\Company
     */
    public function company()
    {
        return $this->belongsTo(EloquentCompany::class, 'company_id', 'id')->first();
    }

    /**
     * @return \App\Checklists\Checklist[]
     */
    public function checklists()
    {
        return $this->hasMany(EloquentChecklist::class, 'client_id', 'id')->get();
    }
}
