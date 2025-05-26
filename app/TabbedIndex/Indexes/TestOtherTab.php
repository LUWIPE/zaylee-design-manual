<?php

namespace App\TabbedIndex\Indexes;

use App\TabbedIndex\IndexTabBase;

class TestOtherTab extends IndexTabBase
{

    public function name(): string
    {
        return 'Andet';
    }

    public function key(): string
    {
        return 'other';
    }

    public function columns(): array
    {
        return [
            TestIdColumn::asArray(),
            TestTitleColumn::asArray(),
        ];
    }
}
