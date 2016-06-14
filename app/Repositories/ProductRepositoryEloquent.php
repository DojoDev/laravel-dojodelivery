<?php

namespace DojoDelivery\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use DojoDelivery\Repositories\ProductRepository;
use DojoDelivery\Models\Product;
use DojoDelivery\Validators\ProductValidator;

/**
 * Class ProductRepositoryEloquent
 * @package namespace DojoDelivery\Repositories;
 */
class ProductRepositoryEloquent extends BaseRepository implements ProductRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */



    public function model()
    {
        return Product::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
