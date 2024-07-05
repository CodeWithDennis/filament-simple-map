<?php

namespace CodeWithDennis\SimpleMap\Components\Concerns;

use Closure;

trait HasFov
{
    protected Closure | int $fov = 10;

    public function fov(Closure | int $fov): static
    {
        $this->fov = $fov;

        return $this;
    }

    public function getFov(): ?int
    {
        return $this->evaluate($this->fov);
    }
}
