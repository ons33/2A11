<?php

class User{
    private int $id;
    private $email;
    private $pwd;

     public function __construct($email,$pwd){
        $this->email=$email;
        $this->pwd=$pwd;
    }
    
    /**
     * Get the value of pwd
     */
    public function getPwd() {
        return $this->pwd;
    }

    /**
     * Set the value of pwd
     */
    public function setPwd($pwd): self {
        $this->pwd = $pwd;
        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * Set the value of email
     */
    public function setEmail($email): self {
        $this->email = $email;
        return $this;
    }

    /**
     * Get the value of id
     *
     * @return int
     */
    public function getId(): int {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self {
        $this->id = $id;
        return $this;
    }
}
?>