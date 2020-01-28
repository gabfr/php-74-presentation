<?php

class User {
    public int $id;
    public string $name;
}

class Order {
    public int $id;
    public User $buyer;
    public string $address;
}

$user = new User;
$user->id = 1;
$user->name = "Linio";

$order = new Order;
$order->id = 1;
$order->buyer = $user;
$order->address = false; // should throw an Unacught TypeError exception
