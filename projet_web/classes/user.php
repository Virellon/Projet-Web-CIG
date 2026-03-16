<?php

class User {

    private $id;
    private $pseudo;
    private $email;
    private $password;


    public function __construct($id = null, $pseudo, $email, $password)
    {
        $this->id = $id;
        $this->pseudo = $pseudo;
        $this->email = $email;
        $this->password = $password;
    }

    
    public function getId() { return $this->id; }
    public function getpseudo() { return $this->pseudo; }
    public function getAge() { return $this->age; }


    
    public function setId($id) { $this->id = $id; }
    public function setpseudo($pseudo) { $this->pseudo = $pseudo; }
    public function setAge($age) { $this->age = $age; }

}
