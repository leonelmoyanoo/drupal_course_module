<?php
namespace Drupal\drupal_course\Controller;

use Drupal\Core\Controller\ControllerBase;

class PageController extends ControllerBase {
    /**
     * Page.
     */
    public function pageFromController()
    {
        return [
            '#markup' => 'Page from controller!',
            '#type' => 'markup'
        ];
    }
    public function pageId(int $id)
    {
        return [
            '#type' => 'markup',
            '#markup' => t('ID is: @id', [
                '@id' => $id
            ]),
        ];
    }

    public function pageCustomArg($customArg)
    {
        return [
            '#type' => 'markup',
            '#markup' => t('Custom argument is: @customArg', [
                '@customArg' => $customArg
            ]),
        ];
    }

    public function pageArguments()
    {
        $content = [];
        for ($i=0; $i < 3; $i++) { 
            $content[] = [
                '#markup' => t('<strong>Line @i</strong><br>', [
                    '@i' => $i
                ]),
            ];
        }
        return $content;
    }

    public function form()
    {
        $content = [];
        for ($i=0; $i < 3; $i++) { 
            $content[] = [
                '#markup' => t('<strong>Line @i</strong><br>', [
                    '@i' => $i
                ]),
            ];
        }
        $content[] = \Drupal::formBuilder()->getForm('\Drupal\drupal_course\Form\addForm');
        return $content;
    }
    public function template()
    {
        $form = \Drupal::formBuilder()->getForm('\Drupal\drupal_course\Form\addForm');
        return [
            '#theme' => 'my_template',
            '#form' => $form,
            '#my_var' => 'Soy la variable jeje'
        ];
    }
}