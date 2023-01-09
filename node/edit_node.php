<?php
use Drupal\node\Entity\Node;
$node = Node::load(1);


$node->get('title')->value = 'nuevo titulo';
$node->get('body')->value = 'nuevo body';
$node->get('uid')->target_id = 0;

$node->save();