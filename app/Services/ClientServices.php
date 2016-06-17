<?php
/**
 * Created by PhpStorm.
 * User: dojodev
 * Date: 16/06/16
 * Time: 22:58
 */

namespace DojoDelivery\Services;


use DojoDelivery\Repositories\ClientRepository;
use DojoDelivery\Repositories\UserRepository;

class ClientServices {
    public function __construct(ClientRepository $clientRepository, UserRepository $userRepository)
    {
        $this->clientRepository = $clientRepository;
        $this->userRepository = $userRepository;
    }

    public function update(array $data, $id)
    {

        $this->clientRepository->update($data,$id);

        $userId = $this->clientRepository->find($id, ['user_id'])->user_id;

        $this->userRepository->update($data['user'], $userId);


    }
    public function create(array $data)
    {
        $data  ['user'] ['password'] = bcrypt(123456);

        $user = $this->userRepository->create($data['user']);

        $data['user_id'] = $user->id;

        $this->clientRepository->create($data);





    }

}