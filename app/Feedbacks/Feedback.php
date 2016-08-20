<?php
namespace App\Feedbacks;

interface Feedback
{
    const TABLE = 'feedbacks';

    /**
     * @return int
     */
    public function id();

    /**
     * @return \App\Clients\Client
     */
    public function client();

    /**
     * @return \App\Notes\Note[]
     */
    public function openNotes();

    /**
     * @return \Carbon\Carbon
     */
    public function createdAt();

    /**
     * @return \Carbon\Carbon
     */
    public function updatedAt();
}
