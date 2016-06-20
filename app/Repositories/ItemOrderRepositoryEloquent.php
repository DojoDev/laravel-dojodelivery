<?php

namespace DojoDelivery\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use DojoDelivery\Repositories\ItemOrderRepository;
use DojoDelivery\Models\ItemOrder;
use DojoDelivery\Validators\ItemOrderValidator;

/**
 * Class ItemOrderRepositoryEloquent
 * @package namespace DojoDelivery\Repositories;
 */
class ItemOrderRepositoryEloquent extends BaseRepository implements ItemOrderRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return ItemOrder::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
