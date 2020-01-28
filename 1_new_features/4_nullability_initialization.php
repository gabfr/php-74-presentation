<?php

class User {
    public int $id;
    public ?string $name = null;
}

$user = new User;
var_dump($user->name); // NULL
