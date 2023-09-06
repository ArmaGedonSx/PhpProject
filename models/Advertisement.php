<?php

// Advertisement model file
class Advertisement
{
    // The ID of the advertisement
    private $id;

    // The ID of the user who created the advertisement
    private $userid;

    // The title of the advertisement
    private $title;

    // Constructor
    public function __construct($id, $userid, $title)
    {
        $this->id = $id;
        $this->userid = $userid;
        $this->title = $title;
    }

    // Getter methods
    public function getId()
    {
        return $this->id;
    }

    public function getUserId()
    {
        return $this->userid;
    }

    public function getTitle()
    {
        return $this->title;
    }
}
