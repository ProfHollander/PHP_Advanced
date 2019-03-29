<?php
namespace App\services;


interface IBD
{
    public function find($sql);
    public function findAll($sql);
}