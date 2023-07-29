<?php

    $connect = mysqli_connect('localhost', 'root', 'root', 'phpregistration');

    if (!$connect) {
        die('Database connection error');
    }