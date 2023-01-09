<?php
namespace Drupal\drupal_course\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\user\Entity\User;

/**
 * An example controller
 */
class ExampleController extends ControllerBase {
    
    /**
     * Returns a render-able array for a test page.
     */
    public function content(){
        $build = [
            '#markup' => $this->t('Que onda pipi?'),
        ];
        return $build;
    }

    /**
     * Get a user by URL.
     */
    public function content_user(User $user) {
        $build = [
            '#markup' => $this->t('User name is @name',[
                '@name' => $user->get('name')->value
            ])
            ];
            return $build;
    }
}