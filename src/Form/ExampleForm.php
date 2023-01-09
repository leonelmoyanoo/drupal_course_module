<?php
namespace Drupal\drupal_course\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class ExampleForm extends FormBase {
    public function getFormId()
    {
        return 'example_form';
    }
    public function buildForm(array $form, FormStateInterface $form_state)
    {
        return $form;
    }
    public function submitForm(array &$form, FormStateInterface $form_state)
    {
        
    }
}