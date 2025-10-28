<?php
class User {
    // Propriétés de l'entité User
    private $id;
    private $email;
    private $pwd;

    // Constructeur de la classe User
    public function __construct($email, $pwd) {
        $this->email = $email;
        $this->pwd = $pwd;
    }

    // Getters et Setters pour chaque propriété
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getPwd() {
        return $this->pwd;
    }

    public function setPwd($pwd) {
        $this->pwd = $pwd;
    }
}
?>
