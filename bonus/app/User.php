<?php

class User {
    protected $name;
    protected $lastname;
    protected $email;

    public function __construct($name, $lastname, $email) {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->email = $email;
    }

    public function getUserFullname() {
        return $this->name . ' ' . $this->lastname;
    }
}