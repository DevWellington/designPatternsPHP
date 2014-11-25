<?php

namespace Ribeiro\DB;

class DbConnection implements IConnection{

    /**
     * @return \PDO
     */
    public static function getConnection()
    {
        return new \PDO("sqlite:".DBNAME);
    }

}
