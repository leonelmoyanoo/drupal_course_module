<?php
// Static querys

$database = \Drupal::database();

$query = $database->query("SELECT * FROM test");
// or
$query = $database->query("SELECT * FROM test WHERE id = :id",[
':id' => 1
]);

$results = $query->fetchAll();
foreach($results as $result){
    ksm($result);
    ksm($result->name);
};

// Dynamic query
$database = \Drupal::database();
$query = $database->select('test', 't');
$query->fields('test', ['name', 'surname']);

// Or

// Create an object of type Select and directly add extra detail
// to this query object: a condition, fields and a range.
$query = $database->select('test', 't')
    ->condition('t.id', 0, '<>')
    ->fields('t', ['id', 'name', 'surname', 'date'])
    ->range(0, 50);

$results = $query->execute();
foreach($results as $result){
    ksm($result);
    ksm($result->name);
};