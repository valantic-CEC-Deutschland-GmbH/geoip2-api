<?php

declare(strict_types = 1);

namespace ValanticSpryker\Client\GeoIp2;

use GeoIp2\WebService\Client;
use Spryker\Client\Kernel\AbstractFactory;
use ValanticSpryker\Client\GeoIp2\GeoIp2\GeoIp2;
use ValanticSpryker\Client\GeoIp2\GeoIp2\GeoIp2Interface;
use ValanticSpryker\Client\GeoIp2\Mapper\GeoIp2ClientMapper;
use ValanticSpryker\Client\GeoIp2\Mapper\GeoIp2ClientMapperInterface;

/**
 * @method \ValanticSpryker\Client\GeoIp2\GeoIp2Config getConfig()
 */
class GeoIp2Factory extends AbstractFactory
{
    /**
     * @return \ValanticSpryker\Client\GeoIp2\GeoIp2\GeoIp2Interface
     */
    public function createGeoIp2(): GeoIp2Interface
    {
        return new GeoIp2(
            $this->createGeoIp2Client(),
            $this->createGeoIp2ClientMapper(),
        );
    }

    /**
     * @return \GeoIp2\WebService\Client
     */
    public function createGeoIp2Client(): Client
    {
        return new Client(
            $this->getConfig()->getGeoIp2AccountId(),
            $this->getConfig()->getGeoIp2LicenseKey(),
        );
    }

    /**
     * @return \ValanticSpryker\Client\GeoIp2\Mapper\GeoIp2ClientMapperInterface
     */
    public function createGeoIp2ClientMapper(): GeoIp2ClientMapperInterface
    {
        return new GeoIp2ClientMapper();
    }
}
