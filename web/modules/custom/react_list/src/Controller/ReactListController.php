<?php

namespace Drupal\react_list\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;

class ReactListController extends ControllerBase
{
    public function content()
    {
        return [
            "#markup" => '<div id="react-app"></div>',
            '#attached' => [
                'library' => [
                    'react_list/react_app',
                ],
            ],
        ];
    }
}
