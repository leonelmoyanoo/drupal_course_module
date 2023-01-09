<?php
$data = [
    'title' => 'titulo creado',
    'body' => 'body creado',
    'type' => 'article',
    'uid' => 1
];
$node = \Drupal::entityTypeManager()->getStorage('node')->create($data);
$node->save();
ksm($node);


use Drupal\node\Entity\Node;
$node = Node::create($data);
ksm($node);