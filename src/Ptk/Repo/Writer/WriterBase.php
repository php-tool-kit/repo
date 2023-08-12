<?php

namespace Ptk\Repo\Writer;

use Ptk\Repo\Repo;

abstract class WriterBase implements WriterInterface {

    public function __construct(Repo $repo) {
        
    }

    abstract public function write();
}