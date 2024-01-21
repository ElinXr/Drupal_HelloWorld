<?php

namespace Drupal\nm_hello_world\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Controller which provides the hello message.
 */
class HelloController extends ControllerBase {

  /**
   * Display the hello message.
   *
   * @return array
   *   Return markup array.
   */
  public function showMessage() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Hello, World!'),
    ];
  }

}
