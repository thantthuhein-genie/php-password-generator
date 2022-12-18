<?php

namespace Tth\PasswordGenerator\Lists;

use TTh\PasswordGenerator\Concerns\HasWords;
use Tth\PhpPasswordGenerator\Contracts\ListContract;

class NounList implements ListContract
{
    use HasWords;
}