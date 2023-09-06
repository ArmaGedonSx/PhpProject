<?php

// User model file
class User
{
    // The ID of the user
    private $id;

    // The name of the user
    private $name;

    // Constructor
    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    // Getter methods
    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }
}
