<?php

namespace Ptk\Repo\Writer;

use Ptk\Repo\Repo;

interface WriterInterface {

    public function write(Repo $repo);
}
