<?php

namespace Ribeiro\DB;

class DbConnectionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \PDO
     */
    private $dbConn;

    /**
     * @var Category
     */
    private $category;

    /**
     * @var DbManager
     */
    private $dbManager;

    public function setUp()
    {
        $this->dbConn = \Ribeiro\DB\DbConnection::getConnection();
        $this->dbManager = new DbManager($this->dbConn);


        $query = 'CREATE TABLE category (id INT AUTO_INCREMENT, description VARCHAR(100));';
        $this->dbConn->exec($query);

        $this->category = new \Ribeiro\DB\Category($this->dbConn);
    }

    public function tearDown()
    {
        $this->dbConn->exec('DROP TABLE category;');
        $this->dbConn = null;
    }

    public function testVerificaSeConexaoEhDoTipoPDOeSeConsegueRealizarConexao()
    {
        $this->assertInstanceOf('\PDO', $this->dbConn);
    }

    public function testVerificaSeConsegueInserirRegistrosNoBancoDeDados()
    {
        $this->category
            ->setId(1)
            ->setDescription('TV')
        ;

        $this->dbManager->persist($this->category);
        $this->dbManager->flush();

        $data = $this->dbManager->getData();

        $this->assertEquals('TV', $data[0]['description']);

    }


} 
