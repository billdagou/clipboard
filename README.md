# TYPO3 Extension: Clipboard

EXT:clipboard allows you to use [clipboard.js](https://clipboardjs.com/) in your extensions.

**The extension version only matches the clipboard.js library version, it doesn't mean anything else.**

## How to use it

You can load the library in your Fluid template with **LoadViewHelper**.

    <clipboard:load />

You can also load your own libraries.

    <clipboard:load js="..." />
    
Or, load the javascript library on top.

    <clipboard:load footer="false" />
    
To use the CDN resource, please set `$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['clipboard']['CDN']` in `ext_localconf.php` or `AdditionalConfiguration.php`.

    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['clipboard']['CDN'] = \Dagou\Clipboard\CDN\jsDelivr::class;