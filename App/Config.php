<?php

class Config
{
    protected static string $ADDRESS = "http://localhost/";
    protected static string $PROJECTNAME = "PHP";
    protected static string $MYSQL_HOST = "localhost";
    protected static string $MYSQL_USER = "root";
    protected static string $MYSQL_PASSWORD = "";
    protected static string $MYSQL_DATABASE = "test";
    /**
     * @return string
     */
    public static function getMYSQLUSER(): string
    {
        return self::$MYSQL_USER;
    }

    /**
     * @return string
     */
    public static function getMYSQLPASSWORD(): string
    {
        return self::$MYSQL_PASSWORD;
    }

    /**
     * @return string
     */
    public static function getMYSQLHOST(): string
    {
        return self::$MYSQL_HOST;
    }

    /**
     * @return string
     */
    public static function getMYSQLDATABASE(): string
    {
        return self::$MYSQL_DATABASE;
    }

    /**
     * @return string
     */
    public static function getADDRESS(): string
    {
        return self::$ADDRESS;
    }

    /**
     * @return string
     */
    public static function getPROJECTNAME(): string
    {
        return self::$PROJECTNAME;
    }
}