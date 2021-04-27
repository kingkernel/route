<?php

namespace kingkernel\route;

class router
{
    public function __construct()
    {
        
    }
    public function getMethod()
    {
        print_r($_SERVER["REQUEST_METHOD"]);
    }
}
