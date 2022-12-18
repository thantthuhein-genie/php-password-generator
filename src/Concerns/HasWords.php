<?php

namespace TTh\PasswordGenerator\Concerns;

trait HasWords
{
    /**
     * @param array $words
     */
    public function __construct(private readonly array $words)
    {
    }

    /**
     * @return string
     */
    public function random(): string
    {
        return $this->words[array_rand($this->words)];
    }

    public function secure(): string
    {
        $word = $this->random();

        $asArray = str_split($word);

        $secured = array_map(function (string $item) {
            return $this->convertStringToNumerical($item);
        }, $asArray);

        return implode('', $secured);
    }

    public function convertStringToNumerical(string $item): string
    {
        return match ($item) {
            'o', 'O' => '0',
            'i', 'I' => '1',
            'z', 'Z' => '2',
            'e', 'E' => '3',
            'a', 'A' => '4',
            's', 'S' => '5',
            default => $item
        };
    }
}