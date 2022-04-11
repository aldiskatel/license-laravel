DEMO: https://www.youtube.com/watch?v=u8fqwH3jTHY
---
# license-laravel (BETA)
a License software published by Neumedira Indonesia

## Register your code to us
> https://license.neumedira.com/register

## Start adding our lib
> composer require aldiskatel/license

## Add This to your .env file
> APP_LICENSE={your license key}

## put this to your controller
implement ``Aldiskatel\License\NeuLicense`` in use below namespace
>namespace App\Http\Controller;

>``use Aldiskatel\License\NeuLicense;``

## Then implement verify method to your controller
> NeuLicense::verify();

## Example

```php
<?php

namespace App\Http\Controllers; // add this namespace

use ...
use Aldiskatel\License\NeuLicense;
use ...

class ExampleController extends Controller
{

    public function index()
    {
      //Put this to your code
      NeuLicense::verify(); // add this function
    }
}
```
