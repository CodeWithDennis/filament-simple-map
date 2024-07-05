<?php

namespace CodeWithDennis\SimpleMap\Components\Concerns;

use Closure;

trait HasWaypoints
{
    protected Closure | null | array $waypoints = null;

    public function waypoints(Closure | null | array $waypoints): static
    {
        $this->waypoints = $waypoints;

        return $this;
    }

    public function getWaypoints(): ?array
    {
        return $this->evaluate($this->waypoints);
    }
}
