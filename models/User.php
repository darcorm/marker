<?php

namespace models;

use app\Model;

class User extends Model
{
    public function setAttributes(array $attributes)
    {
        foreach ($attributes as $key => $value) {
            $this->$key = $value;
        }
    }
}
