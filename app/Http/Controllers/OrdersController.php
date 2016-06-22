<?php

namespace DojoDelivery\Http\Controllers;


use DojoDelivery\Http\Controllers\Controller;

use DojoDelivery\Repositories\OrderRepository;

use DojoDelivery\Repositories\UserRepository;

use Illuminate\Http\Request;


class OrdersController extends Controller
{
   private $repository;

   public  function __construct(OrderRepository $repository)
   {
       $this->repository = $repository;
   }

    public function index()
    {
     

        $orders = $this->repository->paginate(5);

        return view('admin.orders.index', compact('orders'));
    }

    public function edit($id, UserRepository $userRepository)
    {
       $list_status = [0=>'Pendente',1=>'A caminho', 2=>'Entregue'];

       $deliveryman = $userRepository->getDeliverymen();

       $order = $this->repository->find($id);

        return view('admin.orders.edit', compact('order','list_status', 'deliveryman'));

    }

    public function update(Request $request, $id)
    {
       $all = $request->all();
       
       $this->repository->update($all, $id);

       return redirect()->route('admin.orders.index');
    }

}
