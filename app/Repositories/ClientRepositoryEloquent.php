<?php

namespace DojoDelivery\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use DojoDelivery\Repositories\ClientRepository;
use DojoDelivery\Models\Client;
use DojoDelivery\Validators\ClientValidator;

/**
 * Class ClientRepositoryEloquent
 * @package namespace DojoDelivery\Repositories;
 */
class ClientRepositoryEloquent extends BaseRepository implements ClientRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Client::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
