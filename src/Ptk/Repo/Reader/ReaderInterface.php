<?php

namespace Ptk\Repo\Reader;

use Ptk\Repo\Repo;

interface ReaderInterface {

    public function read(Repo $repo);
}