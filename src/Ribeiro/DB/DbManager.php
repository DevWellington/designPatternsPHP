<?php

namespace Ribeiro\DB;

class DbManager implements IDbManager
{
    private $db;
    private $entities;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    /**
     * @param IEntity $entity
     */
    public function persist(IEntity $entity)
    {
        $this->entities[] = $entity;
    }

    /**
     * todo: Refactor this
     */
    public function flush()
    {
        foreach ($this->entities as $entity) {
            if ($entity instanceof Category) {
                $query = "INSERT INTO category VALUES ('{$entity->getId()}', '{$entity->getDescription()}')";
                return $this->db->query($query);
            }
        }
    }

    /**
     * todo: Refactor this
     */
    public function getData()
    {
        foreach ($this->entities as $entity) {
            if ($entity instanceof Category) {
                $sql = 'SELECT id, description FROM category';
                $rs = $this->db->query($sql);

                return $rs->fetchAll(\PDO::FETCH_ASSOC);
            }
        }
    }
} 