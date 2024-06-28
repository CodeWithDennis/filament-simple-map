<?php

namespace CodeWithDennis\SimpleMap\Components\Infolists;

use CodeWithDennis\SimpleMap\Components\Concerns\HasAddress;
use CodeWithDennis\SimpleMap\Components\Concerns\HasKey;
use CodeWithDennis\SimpleMap\Components\Concerns\HasZoom;
use Filament\Infolists\Components\Actions\Action;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\View\View;

class SimpleMap extends Action
{
    use HasAddress;
    use HasZoom;
    use HasKey;

    public function getModalContent(): View|Htmlable|null
    {
        return view('filament-simple-map::components.infolists.simple-map', [
            'address' => $this->getAddress(),
            'key' => $this->getKey(),
            'zoom' => $this->getZoom(),
        ]);
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->slideOver()
            ->modalHeading(false)
            ->modalCancelAction(false)
            ->modalSubmitAction(false)
            ->modalFooterActions(null)
            ->slideOver()
            ->modal();
    }
}