<?php

namespace app\controller;

use piaowa\lib\Controller;

class Index extends Controller
{
    public function index()
    {
        echo 'hello, this is first controller';
    }

    public function test()
    {
        echo 'my test';
    }
}