<?php
function db(): PDO {
    static $pdo = null;
    if ($pdo instanceof PDO) return $pdo;
    $c = require 'config.php';
    $d = $c['db'];
    $dsn = "mysql:dbname={$d['name']};charset={$d['charset']}";
    if (!empty($d['socket'])) {
        $dsn .= ";unix_socket={$d['socket']}";
    } else {
        $dsn .= ";host={$d['host']};port={$d['port']}";
    }
    $pdo = new PDO(
        $dsn,
        $d['user'], $d['pass'],
        [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ]
    );
    return $pdo;
}
