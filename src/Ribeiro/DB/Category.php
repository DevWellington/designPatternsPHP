<?php

namespace Ribeiro\DB;

class Category implements IEntity {

    /**
     * @var \PDO
     */
    private $pdo;

    private $id;
    private $description;

    /**
     * @param \PDO $pdo
     */
    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * @return array
     *
     * todo: Refactor - removing
     */
    public function getData()
    {
        $sql = 'SELECT id, description FROM category';
        $rs = $this->pdo->query($sql);

        return $rs->fetchAll(\PDO::FETCH_ASSOC);
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

}