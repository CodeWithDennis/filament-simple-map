<?php

namespace CodeWithDennis\SimpleMap\Components\Concerns;

use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\View\View;

trait HasModalContent
{
    public function getModalContent(): View | Htmlable | null
    {
        return view('filament-simple-map::components.infolists.simple-map', [
            'address' => $this->getAddress(),
            'key' => $this->getKey(),
            'zoom' => $this->getZoom(),
        ]);
    }
}
