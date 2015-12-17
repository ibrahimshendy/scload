# scload (Search And Download) From SoundCloud
Scload Search and Download Form Soundcloud By keywords and link

##Get "Scload"
You can download it from here, or require it using [composer]
```json
{
    "require": {
      "sc/scload": "dev-master"
    }
}
```

## install via composer
```shell
composer require sc/scload
```

## Configration in app.php file path(app/config/app.php)
providers
```php
  'Sc\Scload\ScloadServiceProvider',               // end of array
```

aliases
```php
  'Scload'		  => 'Sc\Scload\ScloadServiceProvider',               // end of array
```

## Get Sounds by Keywords ..
```php
  $client_id ; // from soundcloud
  Scload::getSounds($word , $limit , $client_id)
```

## Get Sounds by Keywords ..
```php
  $client_id ; // from soundcloud
  Scload::getDownload($url , $client_id)
```
