<?php
    $config = require_once "../../config.php";
    $query = new DataBase($config);

    require 'views/index.view.php';

    $query = null;