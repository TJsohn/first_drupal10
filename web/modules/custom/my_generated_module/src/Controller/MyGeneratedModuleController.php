<?php

declare(strict_types=1);

namespace Drupal\my_generated_module\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for My generated module routes.
 */
final class MyGeneratedModuleController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function __invoke(): array {

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('It works!'),
    ];

    return $build;
  }

}
