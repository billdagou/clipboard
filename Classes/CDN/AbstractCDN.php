<?php
namespace Dagou\Clipboard\CDN;

use Dagou\Clipboard\Interfaces\CDN;
use Dagou\Clipboard\Traits\PageRenderer;
use TYPO3\CMS\Core\SingletonInterface;

abstract class AbstractCDN implements CDN, SingletonInterface {
    use PageRenderer;
    const URL = '';

    /**
     * @param string|NULL $js
     * @param bool $footer
     */
    public function load(string $js = NULL, bool $footer = TRUE) {
        $js = $this->renderJs($js);

        if ($footer) {
            $this->getPageRenderer()->addJsFooterLibrary('clipboard', $js);
        } else {
            $this->getPageRenderer()->addJsLibrary('clipboard', $js);
        }
    }

    /**
     * @param string|NULL $js
     *
     * @return string
     */
    protected function renderJs(string $js = NULL): string {
        return static::URL.$this->getBuild();
    }

    /**
     * @return string
     */
    protected function getBuild(): string {
        return 'clipboard.min.js';
    }
}