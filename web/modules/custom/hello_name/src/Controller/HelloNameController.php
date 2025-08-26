<?php

namespace Drupal\hello_name\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;

class HelloNameController extends ControllerBase
{
    public function hello()
    {
        return new Response('Hello - my name is TJ!');
    }
}
