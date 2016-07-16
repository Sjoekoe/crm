<?php
namespace App\Contacts;

interface Contact
{
    const TABLE = 'contacts';
    
    /**
     * @return int
     */
    public function id();

    /**
     * @return string
     */
    public function firstName();

    /**
     * @return string
     */
    public function lastName();

    /**
     * @return string
     */
    public function fullName();

    /**
     * @return string
     */
    public function phone();

    /**
     * @return string
     */
    public function email();

    /**
     * @return string
     */
    public function pictureUrl();

    /**
     * @return \Carbon\Carbon
     */
    public function createdAt();

    /**
     * @return \Carbon\Carbon
     */
    public function updatedAt();
}
