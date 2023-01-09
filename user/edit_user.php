<?php
use Drupal\user\Entity\User;
$user = User::load(1);
$user->get("name")->value = "Nuevo nombre";
$user->save();
