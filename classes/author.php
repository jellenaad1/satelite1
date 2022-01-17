<?php

class Author
{
    public $name;
    public $origin;

    function __construct($name, $origin)
    {
        if ($name == "") throw new Exception("Author name empty!!!");
        $this->name = $name;
        $this->origin = $origin;
    }
}
