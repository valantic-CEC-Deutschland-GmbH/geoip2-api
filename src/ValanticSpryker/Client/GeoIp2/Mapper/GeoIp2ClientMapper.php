<?php

declare(strict_types = 1);

namespace ValanticSpryker\Client\GeoIp2\Mapper;

use Generated\Shared\Transfer\GeoIp2CountryResponseTransfer;
use GeoIp2\Model\Country;

class GeoIp2ClientMapper implements GeoIp2ClientMapperInterface
{
    /**
     * @param \GeoIp2\Model\Country $country
     *
     * @return \Generated\Shared\Transfer\GeoIp2CountryResponseTransfer
     */
    public function mapGeoIp2RecordToGeoIp2ResponseTransfer(Country $country): GeoIp2CountryResponseTransfer
    {
        return (new GeoIp2CountryResponseTransfer())
            ->setIsoCode($country->country->isoCode)
            ->setConfidence($country->country->confidence)
            ->setGeonameId($country->country->geonameId)
            ->setName($country->country->name)
            ->setIsInEuropeanUnion($country->country->isInEuropeanUnion);
    }
}
