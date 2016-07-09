<?php
namespace App\Accelerator;

use App\Models\StandardModel;
use Illuminate\Database\Eloquent\Model;

class EloquentAccelerator extends Model implements Accelerator
{
    use StandardModel;

    /**
     * @var string
     */
    protected $table = self::TABLE;
}
