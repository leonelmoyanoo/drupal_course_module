<?php
$connection = \Drupal::database();

$num_deleted = $connection->delete('test')
->condition('id', 2)
->execute();
ksm($num_deleted);