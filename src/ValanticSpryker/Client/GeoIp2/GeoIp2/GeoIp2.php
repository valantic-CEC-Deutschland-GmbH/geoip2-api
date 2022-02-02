<?php

declare(strict_types = 1);

namespace ValanticSpryker\Client\GeoIp2\GeoIp2;

use Generated\Shared\Transfer\GeoIp2CountryRequestTransfer;
use Generated\Shared\Transfer\GeoIp2CountryResponseTransfer;
use GeoIp2\WebService\Client;
use ValanticSpryker\Client\GeoIp2\Mapper\GeoIp2ClientMapperInterface;

class GeoIp2 implements GeoIp2Interface
{
    /**
     * @var \GeoIp2\WebService\Client
     */
    public $geoIp2Client;

    /**
     * @var \ValanticSpryker\Client\GeoIp2\Mapper\GeoIp2ClientMapperInterface
     */
    public $geoIp2ClientMapper;

    /**
     * @param \GeoIp2\WebService\Client $geoIp2Client
     * @param \ValanticSpryker\Client\GeoIp2\Mapper\GeoIp2ClientMapperInterface $geoIp2ClientMapper
     */
    public function __construct(Client $geoIp2Client, GeoIp2ClientMapperInterface $geoIp2ClientMapper)
    {
        $this->geoIp2Client = $geoIp2Client;
        $this->geoIp2ClientMapper = $geoIp2ClientMapper;
    }

    /**
     * @param \Generated\Shared\Transfer\GeoIp2CountryRequestTransfer $geoIp2CountryRequestTransfer
     *
     * @return \Generated\Shared\Transfer\GeoIp2CountryResponseTransfer
     */
    public function country(GeoIp2CountryRequestTransfer $geoIp2CountryRequestTransfer): GeoIp2CountryResponseTransfer
    {
        $country = $this->geoIp2Client
            ->country($geoIp2CountryRequestTransfer->getIp());

        return $this->geoIp2ClientMapper
            ->mapGeoIp2RecordToGeoIp2ResponseTransfer($country);
    }
}
