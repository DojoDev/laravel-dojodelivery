<?php

namespace DojoDelivery\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use DojoDelivery\Repositories\CategoryRepository;
use DojoDelivery\Models\Category;
use DojoDelivery\Validators\CategoryValidator;

/**
 * Class CategoryRepositoryEloquent
 * @package namespace DojoDelivery\Repositories;
 */
class CategoryRepositoryEloquent extends BaseRepository implements CategoryRepository
{


    /*
     * Specify Model class name
     *
     * @return string
     */



    public function model()
    {
        return Category::class;
    }



    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
