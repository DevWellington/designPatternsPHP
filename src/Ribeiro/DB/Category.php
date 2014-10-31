<?php

namespace Ribeiro\DB;

class Category implements IDataToOptions {

    /**
     * @var \PDO
     */
    private $pdo;

    /**
     * @param \PDO $pdo
     */
    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getData()
    {
        $sql = 'SELECT id, description FROM category';
        $rs = $this->pdo->query($sql);

        return $rs->fetchAll(\PDO::FETCH_ASSOC);
    }
} 