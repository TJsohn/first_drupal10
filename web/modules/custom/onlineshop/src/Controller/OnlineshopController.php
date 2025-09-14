<?php

namespace Drupal\onlineshop\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;

class OnlineshopController extends ControllerBase
{
    public function content()
    {
        return [
            "#markup" => '<div id="onlineshop_app"></div>',
            '#attached' => [
                'library' => [
                    'onlineshop/onlineshop_app',
                ],
            ],
        ];
    }
}
