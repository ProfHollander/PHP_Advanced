<?php
namespace App\modules;

use App\services\IBD;

abstract class Model
{
    protected $bd;

    public function __construct(IBD $bd)
    {
        $this->bd = $bd;
    }

    public function getOne($id)
    {
        $sql = "SELECT * FROM {$this->getTableName()} WHERE id = " . $id;
        $this->bd->find($sql);
    }

    public function getAll()
    {
        $sql = "SELECT * FROM {$this->getTableName()} ";
        $this->bd->findAll($sql);
    }

}