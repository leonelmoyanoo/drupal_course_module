<?php
$connection = \Drupal::database();

//$query = $connection->update('test');

$num_updated = $connection->update('test')
->fields([
    'surname' => 'Alvarez'
])
->condition('id', 2)
->execute();
ksm($num_updated);