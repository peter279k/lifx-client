LIFX Client
===========

![LIFX](lifx-php.png)

-----

[![Latest Stable Version](https://img.shields.io/packagist/v/PHLAK/lifx-client.svg)](https://packagist.org/packages/PHLAK/lifx-client)
[![Total Downloads](https://img.shields.io/packagist/dt/PHLAK/lifx-client.svg)](https://packagist.org/packages/PHLAK/lifx-client)
[![Author](https://img.shields.io/badge/author-Chris%20Kankiewicz-blue.svg)](https://www.ChrisKankiewicz.com)
[![License](https://img.shields.io/packagist/l/PHLAK/lifx-client.svg)](https://packagist.org/packages/PHLAK/lifx-client)
[![Build Status](https://img.shields.io/travis/PHLAK/lifx-client.svg)](https://travis-ci.org/PHLAK/lifx-client)
[![StyleCI](https://styleci.io/repos/82958655/shield?branch=master)](https://styleci.io/repos/82958655)

PHP client library for the LIFX API (v1) -- by, [Chris Kankiewicz](https://www.ChrisKankiewicz.com) ([@PHLAK](https://twitter.com/PHLAK))

Refer to the full [LIFX API documentation](https://api.developer.lifx.com)
for more information about each method and it's available parameters.

Introduction
------------

LIFX Client is a LIFX API client library for PHP built with GuzzleHttp.

#### Like this project?

[![Join the community on Spectrum](https://img.shields.io/badge/Join_the_community-PHLAKNET-7a15fe.svg)](https://spectrum.chat/phlaknet)
[![Become a Patron](https://img.shields.io/badge/Become_a-Patron-f96854.svg)](https://patreon.com/PHLAK)
[![One-time Donation](https://img.shields.io/badge/Make_a-Donation-006bb6.svg)](https://paypal.me/ChrisKankiewicz)

Requirements
------------

  - [PHP](https://php.net) >= 7.0

Install with Composer
---------------------

```bash
composer require phlak/lifx-client
```

Initializing the Client
-----------------------

First, import LIFX:

```php
use PHLAK\LIFX;
```

Then instantiate the class with your LIFX OAuth 2 access token. You can generate
an access token from your [account settings](https://cloud.lifx.com/settings)
page:

```php
$lifx = new LIFX\Client('YOUR_APP_TOKEN');
```

Usage
-----

List one or more lights via a selector:

```php
$lifx->listLights($selector = 'all');
```

Set the state of one or more lights via a selector:

```php
$lifx->setState($selector, array $params);
```

Set multiple states across multiple selectors:

```php
$lifx->setStates(array $states, array $defaults = []);
```

Toggle the power of one or more lights via a selector:

```php
$lifx->togglePower($selector, $duration = 1);
```

Cause one or more lights to breathe via a selector:

```php
$lifx->breatheEffect($selector, $color, array $params = []);
```

Cause one or more lights to pulse via a selector:

```php
$lifx->pulseEffect($selector, $color, array $params = []);
```

Make the light(s) cycle to the next or previous state in a list of states:

```php
$lifx->cycle($selector, array $states, array $params = []);
```

Get a list of available scenes:

```php
$lifx->listScenes();
```

Activate a scene:

```php
$lifx->activateScene($sceneUuid, $duration = 1.0);
```

Validate a color string:

```php
$lifx->validateColor($string);
```

Handling Exceptions
-------------------

```php
use GuzzleHttp\Exception\ClientException;

try {
    $lifx->togglePower('id:123456789abcd');
} catch (ClientException $exception) {
    // Handle this exception here...
}
```

See the [GuzzleHttp exceptions](http://docs.guzzlephp.org/en/latest/quickstart.html#exceptions)
documentation for more details.

Changelog
---------

A list of changes can be found on the [GitHub Releases](https://github.com/PHLAK/lifx-client/releases) page.

Troubleshooting
---------------

For general help and support join our [Spectrum community](https://spectrum.chat/phlaknet).

Please report bugs to the [GitHub Issue Tracker](https://github.com/PHLAK/lifx-client/issues).

Copyright
---------

This project is licensed under the [MIT License](https://github.com/PHLAK/lifx-client/blob/master/LICENSE).
