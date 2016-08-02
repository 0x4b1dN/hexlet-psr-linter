<?php

namespace PhpLinter;

class App
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function isValidFuncName()
    {
        return true;
    }
}
