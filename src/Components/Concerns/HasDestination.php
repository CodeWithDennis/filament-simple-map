<?php

namespace CodeWithDennis\SimpleMap\Components\Concerns;

use Closure;

trait HasDestination
{
    protected Closure | string | null $destination = null;

    public function destination(Closure | string | null $destination): static
    {
        $this->destination = $destination;

        return $this;
    }

    public function getDestination(): ?string
    {
        return $this->evaluate($this->destination);
    }
}
