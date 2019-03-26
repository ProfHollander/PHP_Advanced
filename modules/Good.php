<?php

namespace App\modules;


class Good extends Model
{
    public $id;
    public $name;
    public $price;

    protected function getTableName()
    {
        return 'good';
    }
}