<?php

namespace CodeWithDennis\SimpleMap\Components\Concerns;

use Closure;

trait HasQuery
{
    protected Closure | string | null $query = null;

    public function query(Closure | string | null $query): static
    {
        $this->query = $query;

        return $this;
    }

    public function getQuery(): ?string
    {
        return $this->evaluate($this->query);
    }
}
