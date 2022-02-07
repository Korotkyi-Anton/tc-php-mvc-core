<?php

namespace antonkorotkyi\phpmvc\middlewares;

abstract class BaseMiddleware
{
    abstract public function execute();
}