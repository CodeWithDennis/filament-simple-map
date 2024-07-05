<?php

namespace CodeWithDennis\SimpleMap\Components\Concerns;

use Closure;

trait HasMode
{
    protected Closure | string $mode = 'driving';

    public function walking(): static
    {
        $this->mode = 'walking';

        return $this;
    }

    public function driving(): static
    {
        $this->mode = 'driving';

        return $this;
    }

    public function bicycling(): static
    {
        $this->mode = 'bicycling';

        return $this;
    }

    public function transit(): static
    {
        $this->mode = 'transit';

        return $this;
    }

    public function flying(): static
    {
        $this->mode = 'flying';

        return $this;
    }

    public function getMode(): string
    {
        return $this->evaluate($this->mode);
    }
}
