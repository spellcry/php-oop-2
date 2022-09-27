<?php

class User {
    private $name;
    private $lastname;
    private $email;

    public function __construct($name, $lastname, $email) {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->email = $email;
    }

    public function getUserFullname() {
        return $this->name . ' ' . $this->lastname;
    }
}