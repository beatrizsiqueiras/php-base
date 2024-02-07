<?php

function connect()
{
    return new PDO("mysqli:host=localhost; dbname=easy_market", "root",'' [
        PDO::ATTR_DEFAULT_FETCH_MODE=> PDO::FETCH_OBJ
    ]);
}
