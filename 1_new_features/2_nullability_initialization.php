<?php

class User {
    public int $id; // no null default
    public ?string $name; // also no null on default (!)
}
