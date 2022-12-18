<?php

namespace Tth\PasswordGenerator\Lists;

use TTh\PasswordGenerator\Concerns\HasWords;
use Tth\PhpPasswordGenerator\Contracts\ListContract;

class AdjectiveList implements ListContract
{
    use HasWords;
}