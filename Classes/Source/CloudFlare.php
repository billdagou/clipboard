<?php
namespace Dagou\Clipboard\Source;

class CloudFlare extends AbstractSource {
    protected const URL = '//cdnjs.cloudflare.com/ajax/libs/clipboard/'.self::VERSION.'/';
}