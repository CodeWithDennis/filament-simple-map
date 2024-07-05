<?php

namespace CodeWithDennis\SimpleMap\Components\Concerns;

use Closure;

trait HasUnits
{
    protected Closure | string $units = 'metric';

    public function metric(): static
    {
        $this->units = 'metric';

        return $this;
    }

    public function imperial(): static
    {
        $this->units = 'imperial';

        return $this;
    }

    public function getUnits(): string
    {
        return $this->evaluate($this->units);
    }
}
