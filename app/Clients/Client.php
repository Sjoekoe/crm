<?php
namespace App\Clients;

interface Client
{
    const TABLE = 'clients';
    
    /**
     * @return int
     */
    public function id();

    /**
     * @return string
     */
    public function label();

    /**
     * @return int
     */
    public function status();

    /**
     * @return int
     */
    public function source();

    /**
     * @return \App\Users\User
     */
    public function accountManager();

    /**
     * @return string
     */
    public function sourceRemarks();

    /**
     * @return \App\Companies\Company
     */
    public function company();

    /**
     * @return \Carbon\Carbon
     */
    public function createdAt();

    /**
     * @return \Carbon\Carbon
     */
    public function updatedAt();
}
