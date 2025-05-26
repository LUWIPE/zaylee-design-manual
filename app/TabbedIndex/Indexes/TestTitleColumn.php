<?php

namespace App\TabbedIndex\Indexes;

use App\TabbedIndex\TabColumnBase;

class TestTitleColumn extends TabColumnBase
{

    public function heading(): string
    {
        return 'Titel';
    }

    public function property(): string
    {
        return 'title';
    }
}
