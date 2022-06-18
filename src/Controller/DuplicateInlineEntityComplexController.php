<?php

namespace Drupal\duplicate_inline_entity_complex\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for duplicate inline entity complex routes.
 */
class DuplicateInlineEntityComplexController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function build() {

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('It works!'),
    ];

    return $build;
  }

}
