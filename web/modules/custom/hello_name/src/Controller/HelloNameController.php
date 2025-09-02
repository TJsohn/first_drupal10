<?php

namespace Drupal\hello_name\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Link;
use Drupal\Core\Url;

class HelloNameController extends ControllerBase
{
    public function content($name)
    {
        $session = \Drupal::request()->getSession();
        $session->set('greeting_name', $name);
        $greetingName = $session->get('greeting_name');

        return [
            '#markup' => $this->t('Hello, @name!', ['@name' => $greetingName]),
        ];
    }

    public function greeting($name)
    {
        return [
            '#markup' => $this->t('Hello, @name!', ['@name' => $name]),
        ];
    }
}
