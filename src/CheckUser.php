<?php

namespace App;

use Closure;
use Exception;

class CheckUser
{
    private $name;
    private $email;
    private $request;

    public function checkNameAndEmail(Closure $next, $name, $email)
    {
        if (!$name || !$email) {
            throw new CheckUserException('Name and email is required');
        }

        $this->name = $name;
        $this->email = $email;

        $this->request = $next($this);

        return $this->request;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}

class CheckUserException extends Exception
{
}