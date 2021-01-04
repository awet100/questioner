<?php


namespace User\Model;


class User
{
    private string $user_name;
    private string $email;
    private string $password;
    private int $id;

    public function setValue($user_name, $email, $password, $id = 1)
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