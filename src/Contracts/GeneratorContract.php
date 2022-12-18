<?php

namespace Tth\PhpPasswordGenerator\Contracts;

interface GeneratorContract
{
    /**
     * @return string
     */
    public function generate(): string;

    /**
     * @return string
     */
    public function generateSecure(): string;
}