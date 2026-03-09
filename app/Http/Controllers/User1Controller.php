<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use DB;
use App\Services\User1Service;

class User1Controller extends Controller {
    use ApiResponser;


    /**
     * THe service to consume the users1 service
     * @var User1Service
     */
    public $user1Service;
    /**
     * Create a new controller instance.
     * @return void
     */
    public function __construct(User1Service $user1Service){
        $this->user1Service = $user1Service;
    }
    /**
     * Obtain the list of users from the users1 service
     * @return Illuminate\Http\Response
     */
    public function index(){
        return $this->successResponse($this->user1Service->obtainUsers1());
    }

    public function add(Request $request){
        return $this->successResponse($this->user1Service->createUsers1($request->all()), Response::HTTP_CREATED);
    }
    /**
     * Obtain and show one user from the users1 service
     * @return Illuminate\Http\Response
     */
    public function show($id){
        return $this->successResponse($this->user1Service->obtainUser1($id));
    }
    /**
     * Update an existing user from the users1 service
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        return $this->successResponse($this->user1Service->editUser1($request->all(), $id));
    }
    /**
     * Remove an existing user from the users1 service
     * @return Illuminate\Http\Response
     */
    public function delete($id){
        return $this->successResponse($this->user1Service->deleteUser1($id));
    }
}