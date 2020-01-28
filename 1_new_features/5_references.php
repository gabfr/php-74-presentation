<?php

class User {
    public int $id = 42;
    public ?string $name = "linio";
}

$user = new User;
$id =& $user->id;
$id = "other than int"; // Should throw an error:
// Cannot assign string to reference held by property User::$id of type int
