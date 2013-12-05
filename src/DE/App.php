<?php

namespace DE;

class App
{

    public function __construct($hasThings)
    {
        $this->hasThings = $hasThings;
    }

    public function hasThings()
    {
        return $this->hasThings;
    }

    public function render($separator)
    {

    }
}
