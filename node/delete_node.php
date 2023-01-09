<?php
use Drupal\node\Entity\Node;
$node = Node::load(1);
$node->delete();
ksm($node);