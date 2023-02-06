<?php
// Make a connection.
$connection = \Drupal::service('database');
// Or.
$connection = \Drupal::database();

// Mak query.
$query = $connection->insert('test')
->fields([
    'name' => 'Martin',
    'surname' => 'Palermo', 
]);
$result = $query->execute();

// Return id
ksm($result);