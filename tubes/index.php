<?php

session_start();

if( isset($_SESSION["login"])) {
    header("Location: login.view.php");
    exit;
}

require('functions.php');

$title = 'Home';

if(isset($_GET['button-search'])) {

    $keyword = $_GET['keyword'];
    $query = "SELECT * FROM
                 sejarah
                WHERE
                 generasi LIKE '%$keyword%' OR
                 tahun LIKE '%$keyword%' OR
                 materi LIKE '%$keyword%'

                 ";
    $students = query($query);
    } else{
        $students = query("SELECT * FROM sejarah");
    }

require('views/index.view.php');
