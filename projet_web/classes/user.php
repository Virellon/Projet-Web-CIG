<?php

class User {

    private $id;
    private $pseudo;
    private $email;
    private $password;
    private $role;


    public function __construct($id = null, $pseudo, $email, $password, $role = 'user')
    {
        $this->id = $id;
        $this->pseudo = $pseudo;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
    }

    
    public function getId() { return $this->id; }
    public function getpseudo() { return $this->pseudo; }
    public function getRole() { return $this->role; }


    
    public function setId($id) { $this->id = $id; }
    public function setpseudo($pseudo) { $this->pseudo = $pseudo; }
    public function setRole($role) { $this->role = $role; }

}
