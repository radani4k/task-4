<?php

const PATH_FILE = 'data_users.txt';

function getUsers() {
    $users = array();
    $data = file_get_contents(PATH_FILE);

    if (isset($data)) {
        $users = unserialize($data);
    }

    return $users;
}

function getUser($item) {
    $users = getUsers();
    $user = $users[$item];
    $user['id'] = $item;

    return $user;
}

function setUser() {
    $users = getUsers();

    $id = isset($_POST['id']) ? $_POST['id'] : '';
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $age = isset($_POST['age']) ? $_POST['age'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $room = isset($_POST['room']) ? $_POST['room'] : '';

    $users[$id]['name'] = $name;
    $users[$id]['age'] = $age;
    $users[$id]['phone'] = $phone;
    $users[$id]['room'] = $room;

    $newData = serialize($users);

    return file_put_contents(PATH_FILE, $newData);
}

function removeUser($item) {
    if (0 <= $item) {
        $users = getUsers();
        unset($users[$item]);

        $newData = serialize($users);

        return file_put_contents(PATH_FILE, $newData);
    }

    return $item;
}

function addUser() {
    $users = getUsers();

    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $age = isset($_POST['age']) ? $_POST['age'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $room = isset($_POST['room']) ? $_POST['room'] : '';

    $users[] = array(
        'name' => $name,
        'age' => $age,
        'phone' => $phone,
        'room' => $room,
    );

    $newData = serialize($users);

    return file_put_contents(PATH_FILE, $newData);
}

function goToHome() {
    header('Location: ./');
}