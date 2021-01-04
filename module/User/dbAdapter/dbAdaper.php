<?php

namespace User;

use Laminas\Db\Adapter\Adapter;

return new Adapter([
    'driver'   => 'Mysqli',
    'database' => 'cd-store',
    'username' => 'awet',
    'password' => 'mysql100%',
]);