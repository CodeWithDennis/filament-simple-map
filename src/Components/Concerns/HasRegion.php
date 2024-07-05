<?php

namespace CodeWithDennis\SimpleMap\Components\Concerns;

use Closure;

trait HasRegion
{
    protected Closure | null | string $region = null;

    public function region(Closure | null | string $region): static
    {
        $this->region = $region;

        return $this;
    }

    public function getRegion(): ?string
    {
        return $this->evaluate($this->region);
    }
}
