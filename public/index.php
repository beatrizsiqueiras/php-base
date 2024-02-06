<?php

require('./bootstrap.php');


try {
    $data = router();

    extract($data['data']);
    
    if (!isset($data['view'])) {
        throw new Exception("O índice 'view' está faltando!!");
    }

    $view = VIEWS . $data['view'];

    if (!file_exists($view)) {
        throw new Exception("Essa view nao existe: $data[view]!");
    }

    require(VIEWS . 'master.php');
} catch (Exception $e) {

    var_dump($e->getMessage());
}
