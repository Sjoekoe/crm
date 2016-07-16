<?php
namespace App\Checklists;

interface Checklist
{
    const TABLE = 'checklists';

    /**
     * @return int
     */
    public function id();

    /**
     * @return \App\Clients\Client
     */
    public function client();

    /**
     * @return \App\Checklists\Items\ChecklistItem[]
     */
    public function items();

    /**
     * @return int
     */
    public function done();

    /**
     * @return int
     */
    public function total();

    /**
     * @return \Carbon\Carbon
     */
    public function createdAt();

    /**
     * @return \Carbon\Carbon
     */
    public function updatedAt();
}
