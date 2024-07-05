<?php

namespace CodeWithDennis\SimpleMap\Components\Infolists;

use CodeWithDennis\SimpleMap\Components\Concerns\HasAddress;
use CodeWithDennis\SimpleMap\Components\Concerns\HasAvoid;
use CodeWithDennis\SimpleMap\Components\Concerns\HasCenter;
use CodeWithDennis\SimpleMap\Components\Concerns\HasDestination;
use CodeWithDennis\SimpleMap\Components\Concerns\HasFov;
use CodeWithDennis\SimpleMap\Components\Concerns\HasHeading;
use CodeWithDennis\SimpleMap\Components\Concerns\HasKey;
use CodeWithDennis\SimpleMap\Components\Concerns\HasLanguage;
use CodeWithDennis\SimpleMap\Components\Concerns\HasLocation;
use CodeWithDennis\SimpleMap\Components\Concerns\HasMapType;
use CodeWithDennis\SimpleMap\Components\Concerns\HasModalContent;
use CodeWithDennis\SimpleMap\Components\Concerns\HasMapMode;
use CodeWithDennis\SimpleMap\Components\Concerns\HasMode;
use CodeWithDennis\SimpleMap\Components\Concerns\HasOrigin;
use CodeWithDennis\SimpleMap\Components\Concerns\HasPitch;
use CodeWithDennis\SimpleMap\Components\Concerns\HasQuery;
use CodeWithDennis\SimpleMap\Components\Concerns\HasRegion;
use CodeWithDennis\SimpleMap\Components\Concerns\HasUnits;
use CodeWithDennis\SimpleMap\Components\Concerns\HasWaypoints;
use CodeWithDennis\SimpleMap\Components\Concerns\HasZoom;
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
    use HasMapMode;
    use HasPitch;
    use HasDestination;
    use HasMode;
    use HasLocation;
    use HasQuery;
    use HasCenter;

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
