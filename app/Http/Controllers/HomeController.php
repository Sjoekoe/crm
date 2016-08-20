<?php
namespace App\Http\Controllers;

use App\Clients\ClientRepository;
use App\Http\Requests;

class HomeController extends Controller
{
    /**
     * @var \App\Clients\ClientRepository
     */
    private $clients;

    public function __construct(ClientRepository $clients)
    {
        $this->middleware('auth');
        $this->clients = $clients;
    }

    public function index()
    {
        $clients = $this->clients->findAllPaginated();

        return view('home', compact('clients'));
    }
}
