<?php

namespace DojoDelivery\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use DojoDelivery\Repositories\OrderRepository;
use DojoDelivery\Models\Order;
use DojoDelivery\Validators\OrderValidator;

/**
 * Class OrderRepositoryEloquent
 * @package namespace DojoDelivery\Repositories;
 */
class OrderRepositoryEloquent extends BaseRepository implements OrderRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Order::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
