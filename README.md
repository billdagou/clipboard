# TYPO3 Extension: Clipboard

EXT:clipboard allows you to use [Clipboard.js](https://clipboardjs.com/) in your extensions.

**The extension version only matches the Clipboard.js library version, it doesn't mean anything else.**

## How to use it
You can load the library in your Fluid template easily.

    <f:asset.script identifier="clipboard" src="{clipboard:uri.js()}" />

To use other Clipboard source, you can register it in `ext_localconf.php` or `AdditionalConfiguration.php`.

    \Dagou\Clipboard\Utility\ExtensionUtility::registerSource(\Dagou\Clipboard\Source\JsDelivr::class);