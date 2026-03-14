<?php

namespace App\Services;
use App\Traits\ConsumesExternalService;

class User2Service{
    use ConsumesExternalService;
    /**
     * The base uri to consume the users2 service
     * @var string
     */
    public $baseUri;

    public function __construct()
    {
        $this->baseUri = config('services.users2.base_uri');
    }
    /**
     * Obtain the full list of users from the users2 service
     * @return string
     */
    public function obtainUsers2()
    {
        return $this->performRequest('GET', '/users2');
        //return $this->successResponse($this->user2Service->obtainUsers2());
    }
    /**
     * Obtain one user from the users2 service
     * @return string
     */
    public function createUsers2($data)
    {
        return $this->performRequest('POST', '/users2', $data);
    }
    /**
     * Obtain one user from the users2 service
     * @return string
     */
    public function obtainUser2($id)
    {
        return $this->performRequest('GET', "/users2/{$id}");
    }
    /**
     * Update an existing user from the users2 service
     * @return string
     */
    public function editUser2($data, $id)
    {
        return $this->performRequest('PUT', "/users2/{$id}", $data);
    }
    /**
     * Remove an existing user from the users2 service
     * @return string
     */
    public function deleteUser2($id)
    {
        return $this->performRequest('DELETE', "/users2/{$id}");
    }
}