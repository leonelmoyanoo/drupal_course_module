<?php
use Drupal\node\Entity\Node;
$node = Node::load(1);
// get id
$node->id();
// get bundle
$node->bundle();
// is new
$node->isNew();
// title
$node->label();
// URL
$node->url();

// Crear duplicado
$node_duplicate = $node->createDuplicate();

// obtener valores de forma larga
$node->get('title')->getValue()[0]['value'];
$node->get('uid')->getValue()[0]['target_id'];

// obtener valores de forma corta
$node->get('title')->value;
$node->get('uid')->target_id;

ksm($node_duplicate);