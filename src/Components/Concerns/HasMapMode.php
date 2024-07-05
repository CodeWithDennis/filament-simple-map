<?php

namespace CodeWithDennis\SimpleMap\Components\Concerns;

use Closure;

trait HasMapMode
{
    protected Closure | string $mapMode = 'place';

    public function place(): static
    {
        $this->mapMode = 'place';

        return $this;
    }

    public function viewing(): static
    {
        $this->mapMode = 'view';

        return $this;
    }

    public function directions(): static
    {
        $this->mapMode = 'directions';

        return $this;
    }

    public function streetview(): static
    {
        $this->mapMode = 'streetview';

        return $this;
    }

    public function search(): static
    {
        $this->mapMode = 'search';

        return $this;
    }

    protected function getMapMode(): ?string
    {
        return $this->evaluate($this->mapMode);
    }
}
