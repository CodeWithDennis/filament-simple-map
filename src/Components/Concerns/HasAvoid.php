<?php

namespace CodeWithDennis\SimpleMap\Components\Concerns;

use Closure;

trait HasAvoid
{
    protected Closure | null | array $avoid = null;

    public function avoid(Closure | null | array $avoid): static
    {
        $this->avoid = $avoid;

        return $this;
    }

    public function getAvoid(): ?array
    {
        return $this->evaluate($this->avoid);
    }
}
