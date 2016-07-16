<?php
namespace App\Checklists\Items;

use App\Models\StandardModel;
use Checklists\EloquentChecklist;
use Illuminate\Database\Eloquent\Model;

class EloquentChecklistItem extends Model implements ChecklistItem
{
    use StandardModel;

    /**
     * @var string
     */
    protected $table = self::TABLE;

    /**
     * @var array
     */
    protected $fillable = ['title', 'detail'];

    /**
     * @return string
     */
    public function title()
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function detail()
    {
        return $this->detail;
    }

    /**
     * @return \App\Checklists\Checklist
     */
    public function checklist()
    {
        return $this->belongsTo(EloquentChecklist::class, 'checklist_id', 'id')->first();
    }
}
