<?php

namespace Ribeiro\DB;

class SQLiteConnection implements IConnection{

    /**
     * @return \PDO
     */
    public function getConnection()
    {
        return new \PDO("sqlite:".DBNAME);
    }

}