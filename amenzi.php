<?php
    require_once "vendor/autoload.php";
    use app\DataBase;
    $config = require_once "../config.php";
    $db = new DataBase($config);

    $query = $db->prepare('Select * from amenzi', [], PDO::FETCH_OBJ);
    if(isset($_POST['nume']) && isset($_POST['faptas'])){
        $insert = $db->query("Insert into amenzi(nume, faptas) values(:nume, :faptas)", [
            'nume'      => $_POST['nume'],
            'faptas'   => $_POST['faptas']
        ]);
        unset($_POST['nume']);
        unset($_POST['faptas']);
        header('location:amenzi.php');
    }

    require 'views/amenzi.view.php';

    $db = null;