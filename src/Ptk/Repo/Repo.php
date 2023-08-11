<?php

namespace Ptk\Repo;

use PDO;
use PDOStatement;

class Repo {

    public function __construct(string $local = ':memory:', ?string $username, ?string $password, ?array $options) {
         
    }

    public function beginTransaction(): Repo {

    }

    public function commit(): Repo {

    }

    public function query(): PDOStatement {

    }

    public function inTransaction(): bool {

    }

    public function prepare(): PDOStatement {

    }

    public function addTable() {
        
    }
}