<?php
namespace Dagou\Clipboard\Interfaces;

interface CDN {
    const VERSION = '2.0.6';

    /**
     * @param string|NULL $js
     * @param bool $footer
     */
    public function load(string $js = NULL, bool $footer = TRUE);
}