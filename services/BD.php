<?php
namespace App\services;


class BD implements IBD
{
    public function find($sql)
    {
        return $sql;
    }

    public function findAll($sql)
    {
        echo $sql;
    }
}