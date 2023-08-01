# GeoIP2 API

[![Minimum PHP Version](https://img.shields.io/badge/php-%3E%3D%207.3-8892BF.svg)](https://php.net/)

MaxMind GeoIP2 API Spryker implementation

A client layer abstraction to use MaxMind GeoIP2 API.  Refer to https://www.maxmind.com/ for documentation of the API.

### Install package
```
composer req valantic-cec/geoip2-api
```

### Update your shared config
```
$config[GeoIp2Constants::GEO_IP_2_ACCOUNT_ID] = '<your-account-id>';
$config[GeoIp2Constants::GEO_IP_2_LICENSE_KEY] = '<your-license-key>';
```

If you want to modify your locales or options (especially if you want to use GeoLite2), also add
```
$config[GeoIp2Constants::GEO_IP_2_LOCALES] = ['en'];
$config[GeoIp2Constants::GEO_IP_2_OPTIONS] = [
    'host' => 'geolite.info',
];
```

### Usage
Inject

`\ValanticSpryker\Client\GeoIp2\GeoIp2Client`

where you need it.
