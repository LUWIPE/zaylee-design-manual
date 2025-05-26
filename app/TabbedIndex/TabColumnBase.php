<?php

namespace App\TabbedIndex;

use Illuminate\Contracts\Support\Arrayable;

abstract class TabColumnBase implements Arrayable
{
    abstract public function heading(): string;

    abstract public function property(): string;

    public function parseValue(object $obj): mixed
    {
        return $obj->{$this->property()} ?? '';
    }

    public function toArray(): array
    {
        return [
            'heading' => $this->heading(),
            'property' => $this->property(),
            'parseValue' => fn (object $obj) => $this->parseValue($obj),
        ];
    }

    public static function asArray(): array
    {
        return new static()->toArray();
    }
}
