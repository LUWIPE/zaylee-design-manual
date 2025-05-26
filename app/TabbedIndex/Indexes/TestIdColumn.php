<?php

namespace App\TabbedIndex\Indexes;

use App\TabbedIndex\TabColumnBase;

class TestIdColumn extends TabColumnBase
{

    public function heading(): string
    {
        return 'Id';
    }

    public function property(): string
    {
        return 'id';
    }
}
