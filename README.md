# TYPO3 Extension: Clipboard

EXT:clipboard allows you to use [Clipboard.js](https://clipboardjs.com/) in your extensions.

**The extension version only matches the Clipboard.js library version, it doesn't mean anything else.**

## How to use it

You can load the library in your Fluid template.

    <clipboard:js />

You can also load your own libraries.

    <clipboard:js src="..." />

For more options please refer to &lt;f:asset.script&gt;.

To use other Clipboard source, you can register it in `ext_localconf.php` or `AdditionalConfiguration.php`.

    \Dagou\Clipboard\Utility\ExtensionUtility::registerSource(\Dagou\Clipboard\Source\JsDelivr::class);