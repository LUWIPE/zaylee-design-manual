<?php

declare(strict_types=1);

namespace App\TabbedIndex\Indexes;

use App\TabbedIndex\IndexBase;
use Illuminate\Support\Collection;

class TestIndex extends IndexBase
{
    private array $tabsArray;

    public function __construct()
    {
        $this->tabsArray = [
            TestCurrentTab::asArray(),
            TestOtherTab::asArray(),
        ];
    }

    public function tabs(): array
    {
        return $this->tabsArray;
    }

    public function defaultTab(): string
    {
        return 'current';
    }

    public function dataQuery(): Collection
    {
        return collect([
            (object)[
                'id' => 1,
                'title' => 'Test 1',
            ],
            (object)[
                'id' => 2,
                'title' => 'Test 2',
            ],
        ]);
    }

    public function rowsPerPage(): int
    {
        return 25;
    }
}
