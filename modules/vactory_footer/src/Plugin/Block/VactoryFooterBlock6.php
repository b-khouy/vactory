<?php

namespace Drupal\vactory_footer\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a "Vactory Footer Block 6" block.
 *
 * @Block(
 *   id = "vactory_footer_block6",
 *   admin_label = @Translation("Vactory Footer Block V6"),
 *   category = @Translation("Footers")
 * )
 */
class VactoryFooterBlock6 extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {

    return [
      "#cache"   => ["max-age" => 0],
      "#theme"   => "block_vactory_footer6",
    ];

  }

}
