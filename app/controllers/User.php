<?php

namespace app\controllers;

class User
{
    public function index($params)
    {
        echo 'oi, vc está na classe User no método Index';
        var_dump($params);
        die();
    }

    public function show($params)
    {
        echo 'oi, vc está na classe User no método Show';
        var_dump($params);
        die();
    }

    public function create($params)
    {
        echo 'oi, vc está na classe User no método Create';
        var_dump($params);
        die();
    }
}
