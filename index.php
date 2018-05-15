<?php

ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);

require_once 'Helper.class.php';
require_once 'Users.class.php';

$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$objUsers = new Users();

switch ($action) {
    case 'add': {
        require_once 'template/save.php';
        break;
    }
    case 'save': {
        $objUsers->addUser();
        Helper::goToHome();
        break;
    }
    case 'edit': {
        $user = $objUsers->getUser((int) $_GET['id']);
        require_once 'template/rewrite.php';
        break;
    }
    case 'rewrite': {
        $objUsers->setUser();
        Helper::goToHome();
        break;
    }
    case 'index':
    default: {
        $users = $objUsers->getUsers();
        require_once 'template/base.php';
        break;
    }

}