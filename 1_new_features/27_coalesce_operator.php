<?php

$options = [];

$options['something'] ??= new DefaultObject;

// Equals to:
$options['something'] = $options['something'] ?? new DefaultObject;

// The object is only created in the array if $options['something']
