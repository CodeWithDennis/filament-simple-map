<?php

namespace CodeWithDennis\SimpleMap\Components\Concerns;

use Closure;

trait HasHeading
{
    protected Closure | int $heading = 10;

    public function heading(Closure | int $heading): static
    {
        $this->heading = $heading;

        return $this;
    }

    public function getHeading(): ?int
    {
        return $this->evaluate($this->heading);
    }
}
