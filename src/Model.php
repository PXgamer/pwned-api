<?php

namespace pxgamer\PwnedApi;

/**
 * Class Model
 */
class Model
{
    /**
     * @param $name
     * @return null
     */
    public function __get($name)
    {
        return $this->$name ?? null;
    }

    /**
     * @param $name
     * @param $value
     * @return mixed
     */
    public function __set($name, $value)
    {
        return $this->$name = $value;
    }
}
