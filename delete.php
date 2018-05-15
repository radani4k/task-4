<?php

ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);

require_once('function.php');

if (isset($_POST['id'])) {
    $id = (0 <= $_POST['id']) ? $_POST['id'] : -1;
    removeUser($id);
}
goToHome();