<?php
use Drupal\user\Entity\User;
$user = User::load(1);

// forma larga de obtener
$user->get("name")->getValue()[0]["value"];
$user->get("roles")->getValue()[0]["target_id"];

// forma corta de obtener
$user->get("name")->value;
$user->get("roles")->target_id;
$user->get("roles")[1]->target_id;
ksm($user);

// Get actual user
$user = Drupal::currentUser();
ksm($user);