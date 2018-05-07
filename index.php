<?php

ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);

require_once 'function.php';

$action = isset($_GET['action']) ? $_GET['action'] : 'index';

switch ($action) {
    case 'add' : {
        require_once 'template/save.php';
        break;
    }
    case 'save' : {
        addUser();
        goToHome();
        break;
    }
    case 'edit' : {
        $user = getUser((int) $_GET['id']);
        require_once 'template/rewrite.php';
        break;
    }
    case 'rewrite' : {
        setUser();
        goToHome();
        break;
    }
    case 'delete' : {
        removeUser((int) $_GET['id']);
        goToHome();
        break;
    }
    case 'index' :
    default: {
        $users = getUsers();
        require_once 'template/base.php';
        break;
    }

}