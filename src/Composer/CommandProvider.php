<?php

namespace szeidler\ComposerPatchesCLI\Composer;

use Composer\Plugin\Capability\CommandProvider as CommandProviderCapability;

class CommandProvider implements CommandProviderCapability {

  /**
   * {@inheritDoc}
   */
  public function getCommands() {
    return [new PatchAddCommand()];
  }
}
