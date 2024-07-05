<?php

namespace CodeWithDennis\SimpleMap\Components\Concerns;

use Closure;

trait HasLanguage
{
    protected Closure | string $language = 'en';

    public function language(Closure | null | string $language): static
    {
        $this->language = $language;

        return $this;
    }

    public function getLanguage(): ?string
    {
        return $this->evaluate($this->language);
    }
}
