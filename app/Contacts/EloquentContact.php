<?php
namespace App\Contacts;

use App\Models\StandardModel;
use Illuminate\Database\Eloquent\Model;

class EloquentContact extends Model implements Contact
{
    use StandardModel;

    /**
     * @var string
     */
    protected $table = self::TABLE;

    /**
     * @var array
     */
    protected $fillable = ['first_name', 'last_name', 'email', 'phone', 'picture_url'];

    /**
     * @return string
     */
    public function firstName()
    {
        return $this->first_name;
    }

    /**
     * @return string
     */
    public function lastName()
    {
        return $this->last_name;
    }

    /**
     * @return string
     */
    public function fullName()
    {
        return $this->firstName() . ' ' . $this->lastName();
    }

    /**
     * @return string
     */
    public function phone()
    {
        return $this->phone;
    }

    /**
     * @return string
     */
    public function email()
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function pictureUrl()
    {
        return $this->picture_url;
    }
}
