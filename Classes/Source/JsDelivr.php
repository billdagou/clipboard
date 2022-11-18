<?php
namespace Dagou\Clipboard\Source;

class JsDelivr extends AbstractSource {
    protected const URL = '//cdn.jsdelivr.net/npm/clipboard@'.self::VERSION.'/dist/';
}