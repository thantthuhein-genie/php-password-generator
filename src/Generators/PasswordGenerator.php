<?php

namespace TTh\PasswordGenerator\Generators;

use Tth\PhpPasswordGenerator\Contracts\GeneratorContract;
use Tth\PhpPasswordGenerator\Contracts\ListContract;

class PasswordGenerator implements GeneratorContract
{
    public function __construct(
        private readonly ListContract $nouns,
        private readonly ListContract $adjectives,
    ) {}

    public function generate(): string
    {
        return $this->build(
            $this->nouns->random(),
            $this->adjectives->random(),
            $this->nouns->random(),
            $this->adjectives->random(),
        );
    }

    public function generateSecure(): string
    {
        return $this->build(
            $this->nouns->secure(),
            $this->adjectives->secure(),
            $this->nouns->secure(),
            $this->adjectives->secure(),
        );
    }

    private function build(string ...$words): string
    {
        return implode('-', $words);
    }
}