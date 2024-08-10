<?php

namespace Himaone\PhpLogin\Middleware;

interface Middleware
{

    function before(): void;
}