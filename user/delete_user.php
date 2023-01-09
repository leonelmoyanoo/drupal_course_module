<?php
use Drupal\user\Entity\User;
$user = User::load(2);
$user->delete();