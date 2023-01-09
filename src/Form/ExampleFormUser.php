<?php
namespace Drupal\drupal_course\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Session\AccountInterface;

class ExampleFormUser extends FormBase{
    public function getFormId()
    {
        return 'example_form_user';
    }
    public function buildForm(array $form, FormStateInterface $form_state, AccountInterface $user = NULL)
    {
        return $form;
    }
    public function submitForm(array &$form, FormStateInterface $form_state)
    {
        
    }
}