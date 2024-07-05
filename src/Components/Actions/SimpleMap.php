<?php

namespace CodeWithDennis\SimpleMap\Components\Infolists\Components\Actions;

use CodeWithDennis\SimpleMap\Components\Infolists\Components\Concerns\HasAddress;
use CodeWithDennis\SimpleMap\Components\Infolists\Components\Concerns\HasKey;
use CodeWithDennis\SimpleMap\Components\Infolists\Components\Concerns\HasModalContent;
use CodeWithDennis\SimpleMap\Components\Infolists\Components\Concerns\HasZoom;
use Filament\Actions\Action;

class SimpleMap extends Action
{
    use HasAddress;
    use HasKey;
    use HasModalContent;
    use HasZoom;

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
