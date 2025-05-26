<?php

namespace App\TabbedIndex\Indexes;

use App\TabbedIndex\IndexTabBase;

class TestCurrentTab extends IndexTabBase
{

    public function name(): string
    {
        return 'Nuværende';
    }

    public function key(): string
    {
        return 'current';
    }

    public function columns(): array
    {
        return [
            TestIdColumn::asArray(),
            TestTitleColumn::asArray(),
        ];
    }
}
