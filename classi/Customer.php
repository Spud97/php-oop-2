<?php

class Customer
{
    private $registered = false;
    private $name;
    private $surname;

    function __construct($_name = null, $_surname = null)
    {
        if (isset($_name) && isset($_surname)) {
            $this->register($_name, $_surname);
        }
    }

    public function getRegistered()
    {
        return $this->registered;
    }

    private function setRegistered($registered)
    {
        $this->registered = $registered;

        return $this;
    }

    public function register($_name, $_surname)
    {
        $this->setName($_name);
        $this->setSurname($_surname);
        $this->setRegistered(true);
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

    public function getSurname()
    {
        return $this->surname;
    }

    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }
}
