<?php
namespace App\Clients;

class EloquentClientRepository implements ClientRepository
{
    /**
     * @var \App\Clients\EloquentClient
     */
    private $client;

    public function __construct(EloquentClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param int $limit
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function findAllPaginated($limit = 15)
    {
        return $this->client->paginate($limit);
    }
}
