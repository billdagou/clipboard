<?php
namespace Dagou\Clipboard\Source;

use Dagou\Clipboard\Interfaces\Source;
use TYPO3\CMS\Core\SingletonInterface;

abstract class AbstractSource implements Source, SingletonInterface {
    protected const URL = '';
    protected const VERSION = '2.0.11';


    /**
     * @return string
     */
    public function getJs(): string {
        return static::URL.$this->getJsBuild();
    }

    /**
     * @return string
     */
    protected function getJsBuild(): string {
        return 'clipboard.min.js';
    }
}