<?php
namespace App\Users;

use App\Models\StandardModel;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\User as Authenticatable;

class EloquentUser extends Authenticatable implements User
{
    use StandardModel;

    /**
     * @var string
     */
    protected $table = self::TABLE;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * @return string
     */
    public function name()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function email()
    {
        return $this->email;
    }

    /**
     * @return \Carbon\Carbon
     */
    public function birthDay()
    {
        return Carbon::parse($this->birthday);
    }

    /**
     * @return string
     */
    public function password()
    {
        return $this->password;
    }

    /**
     * @return string
     */
    public function rememberToken()
    {
        return $this->remember_token;
    }
}
