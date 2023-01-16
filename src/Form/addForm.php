<?php
namespace Drupal\drupal_course\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;
use Symfony\Component\HttpFoundation\RedirectResponse;

/**
 * Create a form.
 */
class addForm extends FormBase {

    /**
     * {@inheritdoc}
     */
    public function getFormId()
    {
        return 'drupal_course_add_form';
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(array $form, FormStateInterface $form_state)
    {
        $form['image_element'] = [
            '#markup' => '<img class="zoom" src="https://amagno.co.uk/wp-content/uploads/2018/03/Personal-data-privacy.jpg">'
        ];

        $form['#attached']['library'][] = 'drupal_course/drupal_course_libraries';

        $form['personal_data'] = [
            '#type' => 'fieldset',
            '#title' => 'Personal data',
            '#attributes' => [
                'class' => ['my-fieldset']
            ],
        ];

        $form['personal_data']['name'] = [
            '#type' => 'textfield',
            '#title' => 'Your name',
            '#required' => TRUE,
        ];

        $form['personal_data']['surname'] = [
            '#type' => 'textfield',
            '#title' => 'Your surname',
            '#required' => TRUE
        ];

        $form['personal_data']['email'] = [
            '#type' => 'email',
            '#title' => 'Your email',
        ];

        $form['institutional_data'] = [
            '#type' => 'details',
            '#title' => 'Institutional data',
            '#open' => TRUE,
        ];

        $form['institutional_data']['phone'] = [
            '#type' => 'tel',
            '#title' => 'Your number phone',
            '#required' => TRUE,
        ];
        $form['institutional_data']['hiring_date'] = [
            '#type' => 'date',
            '#title' => $this->t('Hiring date'),
        ];

        $form['actions']['#type'] = 'actions';
        $form['actions']['submit'] = [
            '#type' => 'submit',
            '#value' => $this->t('Save'),
            '#button_type' => 'primary',
            '#attributes' => [
                'class' => ['my-button']
            ],
        ];
        $form['actions']['cancel'] = [
            '#type' => 'submit',
            '#value' => $this->t('Cancel'),
            '#submit' => ['drupal_course_cancel_form'],
            '#limit_validation_errors' => [],
            '#attributes' => [
                'class' => ['my-button']
            ],
        ];

        return $form;
    }

    /**
     * {@inheritdoc}
     */
    public function validateForm(array &$form, FormStateInterface $form_state)
    {
        $phone = $form_state->getValue('phone');
        $email = $form_state->getValue('email');

        if (strlen($phone) < 3) {
            $form_state->setErrorByName('phone', $this->t('This number is too short.'));
        }
        if ($email) {
            $findme = '@';
            if (!strpos($email, $findme)) {
                $form_state->setErrorByName('email', $this->t('Is not an email'));
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function submitForm(array &$form, FormStateInterface $form_state)
    {
        global $base_url;
        $phone = $form_state->getValue('phone');

        $this->messenger()->addMessage($this->t('Your phone number is: @phone',[
            '@phone' => $phone
        ]));

        $redirect = new RedirectResponse($base_url);
        $redirect->send();

        return;
    }
}