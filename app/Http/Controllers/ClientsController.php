<?php

namespace DojoDelivery\Http\Controllers;

use DojoDelivery\Repositories\ClientRepository;

use DojoDelivery\Services\ClientServices;
use Illuminate\Http\Request;

use DojoDelivery\Http\Requests;

use DojoDelivery\Http\Controllers\Controller;

class ClientsController extends Controller
{

    private $repository;
    private $clientServices;

    public function __construct(ClientRepository $repository, ClientServices $clientServices)
    {
        $this->repository = $repository;
        $this->clientServices = $clientServices;

    }

    public function index()
    {

        $clients = $this->repository->paginate(05);
      return view('admin.clients.index',compact('clients'));
    }
     public function create()
     {
         return view('admin.clients.create');

     }

    public function store(Requests\AdminClientRequest $request)
    {
        $data = $request->all();
        $this->clientServices->create($data);

        return redirect()->route('admin.clients.index');

    }

    public function edit($id)
    {
        $client = $this->repository->find($id);
        return view('admin.clients.edit', compact('client'));

    }

    public function update(Requests\AdminClientRequest $request, $id)
    {
        $data = $request->all();
        $this->clientServices->update($data, $id);

        return redirect()->route('admin.clients.index');
    }

    public function destroy($id)
    {
        $this->repository->delete($id);

        return redirect()->route('admin.clients.index');
    }


}









