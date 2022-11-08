<?php
namespace Dagou\Clipboard\Interfaces;

interface Source {
    const VERSION = '2.0.11';

    /**
     * @return string
     */
    public function getJs(): string;
}