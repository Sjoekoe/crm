<?php
namespace App\Feedbacks;

use App\Clients\EloquentClient;
use App\Models\StandardModel;
use Illuminate\Database\Eloquent\Model;

class EloquentFeedback extends Model implements Feedback
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
     * @return \App\Notes\Note[]
     */
    public function openNotes()
    {
        // TODO: Implement openNotes() method.
    }
}
