<?php

namespace DojoDelivery\Http\Controllers;


use DojoDelivery\Http\Controllers\Controller;

use DojoDelivery\Repositories\OrderRepository;



class OrdersController extends Controller
{
   private $repository;

   public  function __construct(OrderRepository $repository)
   {
       $this->repository = $repository;
   }

    public function index()
    {
     

        $orders = $this->repository->paginate();

    
        return view('admin.orders.index', compact('orders'));
    }

}
