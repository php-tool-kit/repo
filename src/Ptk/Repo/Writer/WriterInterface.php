<?php

namespace Ptk\Repo\Writer;

use Ptk\Repo\Repo;

interface WriterInterface {

    public function __construct(Repo $repo);

    public function write();
}