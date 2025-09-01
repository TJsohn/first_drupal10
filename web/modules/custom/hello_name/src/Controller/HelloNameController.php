<?php

namespace Drupal\hello_name\Controller;

use Drupal\Core\Controller\ControllerBase;

class HelloNameController extends ControllerBase
{
    public function content()
    {
        return [
            '#markup' => $this->t('Hello, TJ'),
        ];
    }
}
