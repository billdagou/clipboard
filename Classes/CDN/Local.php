<?php
namespace Dagou\Clipboard\CDN;

use Dagou\Clipboard\Traits\Asset;

class Local extends AbstractCDN {
    use Asset;
    const URL = 'EXT:Resources/Public/';

    /**
     * @param string|NULL $js
     *
     * @return string
     */
    protected function renderJs(string $js = NULL): string {
        return $this->getAssetPath(
            self::URL.$this->getBuild()
        );
    }
}