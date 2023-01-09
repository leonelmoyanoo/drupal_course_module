<?php
$data = [
    "name" => "Soy una prueba",
    "email" => "prueba@gmail.com",
    "status" => 1
];
$user = Drupal::entityTypeManager()->getStorage('user')->create($data);
$user->save();