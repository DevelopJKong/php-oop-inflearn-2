<?php

/**
 * Magic Methods: Property
 */

class A
{
    private $message;

    public function __isset($name)
    {
        return isset($this->$name);
    }

    public function __unset($name)
    {
        unset($this->$name);
    }

    public function __set($name, $value)
    {
        return $this->$name = $value;
    }

    public function __get($name)
    {
        return $this->$name;
    }
}

$a = new A();

$a->message = "Hello, world";

var_dump($a->message);

//var_dump(isset($a->message));
//var_dump(unset($a->message));