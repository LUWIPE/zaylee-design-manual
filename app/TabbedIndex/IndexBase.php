<?php

declare(strict_types=1);

namespace App\TabbedIndex;

use App\Helpers\DbPaginator;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Collection;

abstract class IndexBase implements Arrayable
{
    abstract public function tabs(): array;

    abstract public function defaultTab(): string;

    abstract public function dataQuery(): Collection;

    abstract public function rowsPerPage(): int;

    public function canCreate(): bool
    {
        return false;
    }

    public function getCreateUrl(): ?string
    {
        return null;
    }

    public function canEdit(): bool
    {
        return false;
    }

    public function getEditUrl(int $id): ?string
    {
        return null;
    }

    public function canDelete(): bool
    {
        return false;
    }

    public function getDeleteUrl(int $id): ?string
    {
        return null;
    }

    public function toArray(): array
    {
        return [
            'indexData' => [
                'tabs' => collect($this->tabs()),
                'defaultTab' => $this->defaultTab(),
                'canCreate' => $this->canCreate(),
                'canEdit' => $this->canEdit(),
                'canDelete' => $this->canDelete(),
                'getCreateUrl' => fn () => $this->getCreateUrl(),
                'getEditUrl' => fn (int $id) => $this->getEditUrl($id),
                'getDeleteUrl' => fn (int $id) => $this->getDeleteUrl($id),
                'objects' => $this->dataQuery(),
                'page' => 1,
                'lastPage' => 1,
            ],
        ];
    }

    public static function asArray(): array
    {
        return new static()->toArray();
    }
}
