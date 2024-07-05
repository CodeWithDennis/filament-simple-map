<?php

namespace CodeWithDennis\SimpleMap\Components\Infolists\Components\Infolists;

use CodeWithDennis\SimpleMap\Components\Infolists\Components\Concerns\HasAddress;
use CodeWithDennis\SimpleMap\Components\Infolists\Components\Concerns\HasAvoid;
use CodeWithDennis\SimpleMap\Components\Infolists\Components\Concerns\HasFov;
use CodeWithDennis\SimpleMap\Components\Infolists\Components\Concerns\HasHeading;
use CodeWithDennis\SimpleMap\Components\Infolists\Components\Concerns\HasKey;
use CodeWithDennis\SimpleMap\Components\Infolists\Components\Concerns\HasLanguage;
use CodeWithDennis\SimpleMap\Components\Infolists\Components\Concerns\HasMapType;
use CodeWithDennis\SimpleMap\Components\Infolists\Components\Concerns\HasModalContent;
use CodeWithDennis\SimpleMap\Components\Infolists\Components\Concerns\HasMode;
use CodeWithDennis\SimpleMap\Components\Infolists\Components\Concerns\HasOrigin;
use CodeWithDennis\SimpleMap\Components\Infolists\Components\Concerns\HasPitch;
use CodeWithDennis\SimpleMap\Components\Infolists\Components\Concerns\HasRegion;
use CodeWithDennis\SimpleMap\Components\Infolists\Components\Concerns\HasUnits;
use CodeWithDennis\SimpleMap\Components\Infolists\Components\Concerns\HasWaypoints;
use CodeWithDennis\SimpleMap\Components\Infolists\Components\Concerns\HasZoom;
use Filament\Infolists\Components\Actions\Action;

class SimpleMap extends Action
{
    use HasAddress;
    use HasKey;
    use HasModalContent;
    use HasZoom;
    use HasAvoid;
    use HasRegion;
    use HasOrigin;
    use HasWaypoints;
    use HasUnits;
    use HasHeading;
    use HasLanguage;
    use HasRegion;
    use HasMapType;
    use HasUnits;
    use HasFov;
    use HasOrigin;
    use HasAvoid;
    use HasMode;
    use HasPitch;

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
