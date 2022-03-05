<?php


class Database
{
    private PDO $db;

    public function __construct()
    {
        $host = Config::getMYSQLHOST();
        $dbname = Config::getMYSQLDATABASE();
        $user = Config::getMYSQLUSER();
        $password = Config::getMYSQLPASSWORD();
        $this->setDb(new PDO("mysql:host=$host;dbname=$dbname", $user, $password));
    }

    public function setQuery(string $query): PDOStatement
    {
        return $this->getDb()->prepare($query);
    }
    public function doQuery(PDOStatement $statement , array $values = []): bool
    {
        return $statement->execute($values);
    }
    public function parseData(PDOStatement $exce , bool $objective = true): array | object
    {
        return $exce->fetchAll($objective ? PDO::FETCH_OBJ : PDO::FETCH_ASSOC);
    }

    /**
     * @param PDO $db
     */
    public function setDb(PDO $db): void
    {
        $this->db = $db;
    }

    /**
     * @return PDO
     */
    public function getDb(): PDO
    {
        return $this->db;
    }
}
