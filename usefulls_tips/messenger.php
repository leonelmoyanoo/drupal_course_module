<?php
// old form.
drupal_set_message(t('Hola'));
drupal_set_message(t('Hola'), 'status');
drupal_set_message(t('Hola'), 'warning');
drupal_set_message(t('Hola'), 'error');

// Forma 2
\Drupal::messenger()->addMessage(t('Holaa'));
\Drupal::messenger()->addMessage(t('Holaa'), 'status');
\Drupal::messenger()->addMessage(t('Holaa'), 'warning');
\Drupal::messenger()->addMessage(t('Holaa'), 'error');

// Forma 3
$messenger = \Drupal::messenger();
$messenger->addMessage(t('Holaa'));
$messenger->addMessage(t('Holaa'), $messenger::TYPE_STATUS);
$messenger->addMessage(t('Holaa'), $messenger::TYPE_WARNING);
$messenger->addMessage(t('Holaa'), $messenger::TYPE_ERROR);

// Forma 4
$messenger = \Drupal::messenger();
$messenger->addMessage(t('Hi'));
$messenger->addStatus(t('Status'));
$messenger->addWarning(t('warning'));
$messenger->addError(t('Error'));