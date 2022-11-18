<?php
namespace Dagou\Clipboard\ViewHelpers;

use Dagou\Clipboard\Interfaces\Source;
use Dagou\Clipboard\Source\Local;
use Dagou\Clipboard\Utility\ExtensionUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper;

class JsViewHelper extends ScriptViewHelper {
    public function initializeArguments(): void {
        parent::initializeArguments();

        $this->overrideArgument(
            'identifier',
            'string',
            'Use this identifier within templates to only inject your JS once, even though it is added multiple times.',
            FALSE,
            'clipboard'
        );
    }

    /**
     * @return string
     */
    public function render(): string {
        if (!$this->arguments['src']) {
            if (is_subclass_of(($className = ExtensionUtility::getSource()), Source::class)) {
                $source = GeneralUtility::makeInstance($className);
            } else {
                $source = GeneralUtility::makeInstance(Local::class);
            }

            $this->tag->addAttribute('src', $source->getJs());
        }

        return parent::render();
    }
}