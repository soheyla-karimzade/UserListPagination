<?php

namespace Daa\UserListPagination\Http\Controllers;

use App\Http\Controllers\Controller;

class UserListPaginationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $UserModel= config('userListPagination.UserModelName');
         $UserPagination=('\App\Models\\'.$UserModel)::orderby('id','DESC')->paginate(10);

        return view('userListPagination::userListPagination',compact('UserPagination'));
    }

}
