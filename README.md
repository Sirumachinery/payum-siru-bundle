# Payum Siru gateway bundle

Add Siru gateway to Payum using Symfony bundle.

## Requirements

- PHP 8.0+
- Symfony 6.0+
- API credentials from Siru

## Installation

```shell
composer require sirumobile/payum-siru-bundle
```

You most likely have payum-bundle already installed but if not, you also need
one of [php-http/client-implementation](https://packagist.org/providers/php-http/client-implementation) adapters. For example

```shell
composer require symfony/http-client
```

## Configuration

You need your API credentials and integration details from Siru Mobile.

```yaml
# config/packages/payum.yaml
payum:
    gateways:
        siru_checkout:
            factory: siru_checkout
            # These are only example values. Replace these with values
            # that you received from Siru Mobile
            merchant_id: 123
            merchant_secret: yoursecret
            variant: variant2
            purchase_country: FI
            service_group: 2
            tax_class: 3
```
