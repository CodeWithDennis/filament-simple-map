<?php

namespace CodeWithDennis\SimpleMap\Components\Concerns;

use Closure;

trait HasOrigin
{
    protected Closure | string | null $origin = null;

    public function origin(Closure | string | null $origin): static
    {
        $this->origin = $origin;

        return $this;
    }

    public function getOrigin(): ?string
    {
        return $this->evaluate($this->origin);
    }
}
