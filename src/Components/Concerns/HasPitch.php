<?php

namespace CodeWithDennis\SimpleMap\Components\Concerns;

use Closure;

trait HasPitch
{
    protected Closure | int $pitch = 0;

    public function pitch(Closure | int $pitch): static
    {
        $this->pitch = $pitch;

        return $this;
    }

    public function getPitch(): ?int
    {
        return $this->evaluate($this->pitch);
    }
}
