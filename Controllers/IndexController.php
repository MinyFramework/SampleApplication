<?php

namespace Application\Controllers;

use Miny\Controller\Controller;
use Miny\HTTP\Request;

class IndexController extends Controller
{

    public function indexAction(Request $request)
    {
        echo 'Hello ' . $request->get()->get('name', 'World');
    }

}
