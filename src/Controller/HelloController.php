<?php

namespace Drupal\drupal_course\Controller;

use Drupal\Core\Controller\ControllerBase;

class HelloController extends ControllerBase {
    /**
     * Display markup
     */
    public function content() {
        return [
            '#type' => 'markup',
            '#markup' => $this->t('Hello, World!'),
        ];
    }

    /**
     * New page
     */
    public function myPage()
    {
        return [
            '#type' => '#markup',
            '#markup' => 'My new page'
        ];
    }
    /**
     * New page
     */
    public function myPage1()
    {
        return [
            '#type' => '#markup',
            '#markup' => 'My new page'
        ];
    }
}