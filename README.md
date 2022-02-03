# GeoIP2 API

[![Minimum PHP Version](https://img.shields.io/badge/php-%3E%3D%207.3-8892BF.svg)](https://php.net/)

GeoIP2 API Spryker implementation

## Integration

### Add composer registry
```
composer config repositories.gitlab.nxs360.com/461 '{"type": "composer", "url": "https://gitlab.nxs360.com/api/v4/group/461/-/packages/composer/packages.json"}'
```

### Add Gitlab domain
```
composer config gitlab-domains gitlab.nxs360.com
```

### Authentication
Go to Gitlab and create a personal access token. Then create an **auth.json** file:
```
composer config gitlab-token.gitlab.nxs360.com <personal_access_token>
```

Make sure to add **auth.json** to your **.gitignore**.

### Install package
```
composer req valantic-spryker/geoip2-api
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
    'host' => 'https://geolite.info/geoip/v2.1/country/{ip_address}',
];
```
