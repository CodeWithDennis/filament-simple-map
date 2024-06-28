<?php

namespace CodeWithDennis\SimpleMap\Components\Concerns;

use Closure;

trait HasAddress
{
    protected Closure | string | null $address = null;

    public function address(Closure | string | null $address): static
    {
        $this->address = $address;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->evaluate($this->address);
    }
}
