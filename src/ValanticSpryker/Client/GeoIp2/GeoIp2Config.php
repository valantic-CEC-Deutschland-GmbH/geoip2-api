<?php

declare(strict_types = 1);

namespace ValanticSpryker\Client\GeoIp2;

use Spryker\Client\Kernel\AbstractBundleConfig;
use ValanticSpryker\Shared\GeoIp2\GeoIp2Constants;

class GeoIp2Config extends AbstractBundleConfig
{
    /**
     * @return int
     */
    public function getGeoIp2AccountId(): int
    {
        return $this->get(GeoIp2Constants::GEO_IP_2_LICENSE_KEY, 0);
    }

    /**
     * @return string|null
     */
    public function getGeoIp2LicenseKey(): ?string
    {
        return $this->get(GeoIp2Constants::GEO_IP_2_LICENSE_KEY);
    }
}
