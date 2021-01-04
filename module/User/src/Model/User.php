<?php


namespace User\Model;


class User
{
    private $user_name;
    private $email;
    private $password;
    private $id;

    public function __construct($user_name, $email, $password, $id = null)
    {
        $this->user_name = $user_name;
        $this->email = $email;
        $this->password = $password;
        $this->id = $id;
    }


    public function getUserName(): string
    {
        return $this->user_name;
    }


    public function getEmail(): string
    {
        return $this->email;
    }


    public function getPassword(): string
    {
        return $this->password;
    }


    public function getId(): int
    {
        return $this->id;
    }


}