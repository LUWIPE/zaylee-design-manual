<?php

declare(strict_types=1);

namespace App\TabbedIndex;

use Illuminate\Contracts\Support\Arrayable;

abstract class IndexTabBase implements Arrayable
{
    abstract public function name(): string;

    abstract public function key(): string;

    abstract public function columns(): array;

    public function toArray(): array
    {
        return [
            'name' => $this->name(),
            'key' => $this->key(),
            'columns' => $this->columns(),
        ];
    }

    public static function asArray(): array
    {
        return new static()->toArray();
    }
}
