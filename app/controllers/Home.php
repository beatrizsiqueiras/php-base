<?php

namespace app\controllers;

class Home
{
    public function index($params)
    {
        echo 'oi, vc está na classe Home';
        var_dump($params);
        die();
    }
}
