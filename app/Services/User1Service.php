<?php

namespace App\Services;
use App\Traits\ConsumeExternalService;

class User1Service{
    use ConsumeExternalService;
    /**
     * The base uri to consume the users1 service
     * @var string
     */
    public $baseUri;

    public function __construct()
    {
        $this->baseUri = config('services.users1.base_uri');
    }

    /**
     * Obtain the full list of users from the users1 service
     * @return string
     */
    public function obtainUsers1()
    {
        return $this->performRequest('GET', '/users');
    }
    /**
     * Obtain one user from the users1 service
     * @return string
     */
    public function createUsers1($id)
    {
        return $this->performRequest('POST', '/users', $data);
    }
    /**
     * Obtain one user from the users1 service
     * @return string
     */
    public function obtainUser1($id)
    {
        return $this->performRequest('GET', "/users/{$id}");
    }
    /**
     * Update an existing user from the users1 service
     * @return string
     */
    public function editUser1($data, $id)
    {
        return $this->performRequest('PUT', "/users/{$id}", $data);
    }
    
}
