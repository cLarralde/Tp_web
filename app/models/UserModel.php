<?php
class UserModel
{
    private $db;
    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=gameroom;charset=utf8', 'root', '');
    }
    function newUser($newEmail, $newPassword)
    {
        $query = $this->db->prepare('INSERT INTO `usuarios` (`email`, `password`) VALUES (?,?)');
        $query->execute([$newEmail, $newPassword]);
    }

    function login($email)
    {
        $query = $this->db->prepare('SELECT * FROM usuarios WHERE email = ?');
        $query->execute([$email]);
        $user = $query->fetch(PDO::FETCH_OBJ);
        return $user;
    }
}
