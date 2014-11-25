<?php

namespace Ribeiro\DB;

interface IDbManager
{
    public function persist(IEntity $entity);
    public function flush();
    public function getData();
}