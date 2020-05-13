<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Http\Response;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     * @throws Exception
     */
    public function index(Request $request)
    {
        // I use plugin to make my code simple
        // Plugin used Yajra jQUery Datatables (https://github.com/yajra/laravel-datatables)
        return datatables()->of(User::query())->toJson();
    }


}
