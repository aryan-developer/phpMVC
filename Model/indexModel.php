<?php


class indexModel extends Database
{
    public function getAll(): array
    {
        $stmt = $this->getDb()->query('SELECT * FROM `words`');
        return $this->parseData($stmt , false);
    }
}