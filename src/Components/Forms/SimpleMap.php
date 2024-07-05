<?php

namespace CodeWithDennis\SimpleMap\Components\Forms;

use CodeWithDennis\SimpleMap\Components\Concerns\HasAddress;
use CodeWithDennis\SimpleMap\Components\Concerns\HasAvoid;
use CodeWithDennis\SimpleMap\Components\Concerns\HasCenter;
use CodeWithDennis\SimpleMap\Components\Concerns\HasDestination;
use CodeWithDennis\SimpleMap\Components\Concerns\HasFov;
use CodeWithDennis\SimpleMap\Components\Concerns\HasHeading;
use CodeWithDennis\SimpleMap\Components\Concerns\HasKey;
use CodeWithDennis\SimpleMap\Components\Concerns\HasLanguage;
use CodeWithDennis\SimpleMap\Components\Concerns\HasLocation;
use CodeWithDennis\SimpleMap\Components\Concerns\HasMapMode;
use CodeWithDennis\SimpleMap\Components\Concerns\HasMapType;
use CodeWithDennis\SimpleMap\Components\Concerns\HasModalContent;
use CodeWithDennis\SimpleMap\Components\Concerns\HasMode;
use CodeWithDennis\SimpleMap\Components\Concerns\HasOrigin;
use CodeWithDennis\SimpleMap\Components\Concerns\HasPitch;
use CodeWithDennis\SimpleMap\Components\Concerns\HasQuery;
use CodeWithDennis\SimpleMap\Components\Concerns\HasRegion;
use CodeWithDennis\SimpleMap\Components\Concerns\HasUnits;
use CodeWithDennis\SimpleMap\Components\Concerns\HasWaypoints;
use CodeWithDennis\SimpleMap\Components\Concerns\HasZoom;
use Filament\Forms\Components\Actions\Action;

class SimpleMap extends Action
{
    use HasAddress;
    use HasAvoid;
    use HasAvoid;
    use HasCenter;
    use HasDestination;
    use HasFov;
    use HasHeading;
    use HasKey;
    use HasLanguage;
    use HasLocation;
    use HasMapMode;
    use HasMapType;
    use HasModalContent;
    use HasMode;
    use HasOrigin;
    use HasOrigin;
    use HasPitch;
    use HasQuery;
    use HasRegion;
    use HasRegion;
    use HasUnits;
    use HasUnits;
    use HasWaypoints;
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
