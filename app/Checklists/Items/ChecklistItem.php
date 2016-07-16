<?php
namespace App\Checklists\Items;

interface ChecklistItem
{
    const TABLE = 'checklist_item';

    /**
     * @return int
     */
    public function id();

    /**
     * @return string
     */
    public function title();

    /**
     * @return string
     */
    public function detail();

    /**
     * @return \App\Checklists\Checklist
     */
    public function checklist();

    /**
     * @return \Carbon\Carbon
     */
    public function createdAt();

    /**
     * @return \Carbon\Carbon
     */
    public function updatedAt();
}
