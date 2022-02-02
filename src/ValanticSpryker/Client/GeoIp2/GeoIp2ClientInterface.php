<?php

declare(strict_types = 1);

namespace ValanticSpryker\Client\GeoIp2;

use Generated\Shared\Transfer\GeoIp2CountryRequestTransfer;
use Generated\Shared\Transfer\GeoIp2CountryResponseTransfer;

interface GeoIp2ClientInterface
{
    /**
     * @param \Generated\Shared\Transfer\GeoIp2CountryRequestTransfer $geoIp2CountryRequestTransfer
     *
     * @return \Generated\Shared\Transfer\GeoIp2CountryResponseTransfer
     */
    public function country(GeoIp2CountryRequestTransfer $geoIp2CountryRequestTransfer): GeoIp2CountryResponseTransfer;
}
