<?php
namespace Dagou\Clipboard\ViewHelpers\Uri;

use Dagou\Clipboard\Interfaces\Source;
use Dagou\Clipboard\Source\Local;
use Dagou\Clipboard\Utility\ExtensionUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

class JsViewHelper extends AbstractViewHelper {
    /**
     * @return string
     */
    public function render(): string {
        if (is_subclass_of(($className = ExtensionUtility::getSource()), Source::class)) {
            $source = GeneralUtility::makeInstance($className);
        } else {
            $source = GeneralUtility::makeInstance(Local::class);
        }

        return $source->getJs();
    }
}