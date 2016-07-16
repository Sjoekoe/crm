<?php
namespace Checklists;

use App\Checklists\Checklist;
use App\Checklists\Items\EloquentChecklistItem;
use App\Clients\EloquentClient;
use App\Models\StandardModel;
use Illuminate\Database\Eloquent\Model;

class EloquentChecklist extends Model implements Checklist
{
    use StandardModel;

    /**
     * @var string
     */
    protected $table = self::TABLE;

    /**
     * @return \App\Clients\Client
     */
    public function client()
    {
        return $this->belongsTo(EloquentClient::class, 'client_id', 'id')->first();
    }

    /**
     * @return \App\Checklists\Items\ChecklistItem[]
     */
    public function items()
    {
        return $this->hasMany(EloquentChecklistItem::class, 'checklist_id', 'id')->get();
    }

    /**
     * @return int
     */
    public function done()
    {
        
    }

    /**
     * @return int
     */
    public function total()
    {
        
    }
}
