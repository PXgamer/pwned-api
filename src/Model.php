<?php

namespace pxgamer\PwnedApi;

class Model
{
    public function __get($name)
    {
        return $this->$name ?? null;
    }

    public function __set($name, $value)
    {
        return $this->$name = $value;
    }
}