<?php namespace Project\Database;

/**
 * Class Database
 */


class Database
{
    private $host, $username, $password, $database;

    /**
     * @var \PDO
     */
    protected $connection;

    /**
     * Initialize object
     *
     * @param $host
     * @param $username
     * @param $password
     * @param $database
     */
    public function __construct($host, $username, $password, $database)
    {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
        $this->connect();
    }

    /**
     * Retrieve a new PDO instance to communicate with the DB
     *
     * @throws \Exception
     */
    private function connect()
    {
        try {
            $this->connection = new \PDO("mysql:dbname=$this->database;host=$this->host", $this->username, $this->password);
            $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            throw new \Exception("DB Connection failed: " . $e->getMessage());
        }
    }

    /**
     * @return \PDO
     */
    public function getConnection()
    {
        return $this->connection;
    }
}