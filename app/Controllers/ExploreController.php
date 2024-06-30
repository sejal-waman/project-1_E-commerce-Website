<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ExploreController extends BaseController
{
    public function index()
    {
        //
    }

    public function explore()
    {
        return view('Explore/explore');
    }
}
