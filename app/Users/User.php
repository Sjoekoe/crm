<?php
namespace App\Users;

interface User
{
    const TABLE = 'users';
    
    /**
     * @return int
     */
    public function id();

    /**
     * @return string
     */
    public function name();

    /**
     * @return string
     */
    public function email();

    /**
     * @return \Carbon\Carbon
     */
    public function birthDay();

    /**
     * @return string
     */
    public function password();

    /**
     * @return string
     */
    public function rememberToken();

    /**
     * @return \Carbon\Carbon
     */
    public function createdAt();

    /**
     * @return \Carbon\Carbon
     */
    public function updatedAt();
}
