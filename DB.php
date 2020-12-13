<?php

class DB
{
    public const TABLE_GOODS = 'shop';

    private static $instance;
    private static $config = [
        'dsn' => 'mysql:dbname=shop;host=127.0.0.1',
        'user' => 'root',
        'pwd' => 'root',
    ];

    private $link;

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getTableDataCount($tableName)
    {
        try {
            return $this->link
                ->query("SELECT COUNT(*) FROM {$tableName}")
                ->fetchColumn();
        } catch (Throwable $e) {
            return null;
        }
    }

    public function getTableDataPart($tableName,int $from, int $limit)
    {
        try {
            return $this->link
                ->query("SELECT * FROM ${$tableName} LIMIT {$from},{$limit}")
                ->fetchAll(PDO::FETCH_ASSOC);
        } catch (Throwable $e) {
            return null;
        }
    }

    public function getTableData($tableName)
    {
        try {
            return $this->link
                ->query("SELECT * FROM {$tableName}")
                ->fetchAll(PDO::FETCH_ASSOC);
        } catch (Throwable $e) {
            return null;
        }
    }

    public function getById($id)
    {
        try {
            return $this->link
                ->query("SELECT * FROM shop WHERE id = " . (int)$id)
                ->fetch(PDO::FETCH_ASSOC);
        } catch (Throwable $e) {
            return null;
        }
    }

    private function __construct()
    {
        try {
            $this->link = new PDO(
                self::$config['dsn'],
                self::$config['user'],
                self::$config['pwd']
            );
        } catch (PDOException $e) {
            echo 'Подключение не удалось: ' . $e->getMessage();
        }
    }
    
}
