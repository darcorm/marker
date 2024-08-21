<?php

namespace models;

class User
{
    public function setAttributes(array $attributes)
    {
        foreach ($attributes as $key => $value) {
            $this->$key = $value;
        }
    }
}
