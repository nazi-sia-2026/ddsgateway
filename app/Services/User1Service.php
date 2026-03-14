<?php

namespace App\Services;
use App\Traits\ConsumesExternalService;

class User1Service{
    use ConsumesExternalService;
    /**
     * The base uri to consume the users1 service
     * @var string
     */
    public $baseUri;

    public function __construct()
    {
        $this->baseUri = config('services.users1.base_uri');
        //$this->baseUri = 'http://127.0.0.1:8000/';
    }

    /**
     * Obtain the full list of users from the users1 service
     * @return string
     */
    public function obtainUsers1()
    {
        return $this->performRequest('GET', '/users1');
    }
    /**
     * Obtain one user from the users1 service
     * @return string
     */
    public function createUsers1($data)
    {
        return $this->performRequest('POST', '/users1', $data);
    }
    /**
     * Obtain one user from the users1 service
     * @return string
     */
    public function obtainUser1($id)
    {
        return $this->performRequest('GET', "/users1/{$id}");
    }
    /**
     * Update an existing user from the users1 service
     * @return string
     */
    public function editUser1($data, $id)
    {
        return $this->performRequest('PUT', "/users1/{$id}", $data);
    }
    /**
     * Remove an existing user from the users1 service
     * @return string
     */
    public function deleteUser1($id)
    {
        return $this->performRequest('DELETE', "/users1/{$id}");
    }
    
}
