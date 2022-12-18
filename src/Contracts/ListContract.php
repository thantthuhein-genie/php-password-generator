<?php

namespace Tth\PhpPasswordGenerator\Contracts;

interface ListContract
{
    /**
     * @return string
     */
    public function random(): string;

    /**
     * @return string
     */
    public function secure(): string;
}