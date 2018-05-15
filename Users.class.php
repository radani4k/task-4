<?php

class Users
{

    private static $pathFile = 'data_users.txt';

    private $users;

    public function setUsers($users) {
        $serializeData = serialize($users);

        return file_put_contents(self::$pathFile, $serializeData);
    }

    public function getUsers() {
        $data = file_get_contents(self::$pathFile);

        if (isset($data)) {
            $this->users = unserialize($data);
        }

        return $this->users;
    }

    public function getUser($id) {
        $this->users = $this->getUsers();
        $user = $this->users[$id];
        $user['id'] = $id;

        return $user;
    }

    public function setUser() {
        $this->users = $this->getUsers();

        $id = isset($_POST['id']) ? $_POST['id'] : '';
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $age = isset($_POST['age']) ? $_POST['age'] : '';
        $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
        $room = isset($_POST['room']) ? $_POST['room'] : '';

        $this->users[$id] = array(
            'name' => $name,
            'age' => $age,
            'phone' => $phone,
            'room' => $room,
        );

        return self::setUsers($this->users);
    }

    public function removeUser($item) {
        if (0 <= $item) {
            $this->users = $this->getUsers();
            unset($this->users[$item]);

            return self::setUsers($this->users);
        }

        return false;
    }

    public function addUser() {
        $this->users = $this->getUsers();

        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $age = isset($_POST['age']) ? $_POST['age'] : '';
        $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
        $room = isset($_POST['room']) ? $_POST['room'] : '';

        $this->users[] = array(
            'name' => $name,
            'age' => $age,
            'phone' => $phone,
            'room' => $room,
        );

        return self::setUsers($this->users);
    }
}