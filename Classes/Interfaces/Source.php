<?php
namespace Dagou\Clipboard\Interfaces;

interface Source {
    /**
     * @return string
     */
    public function getJs(): string;
}