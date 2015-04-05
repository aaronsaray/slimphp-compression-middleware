# SlimPHP Middleware

This is a collection of useful Slim PHP Middlewares.

### Compression Middleware
Need to add gzip compression to your output but don't have access to the server configuration?  This middleware is for you!

**Please note: If you CAN add this functionality to your server config, please do that instead.**

## Installation Instructions

Add the following to your composer.json for now...

```JSON
 "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/aaronsaray/SlimPHPMiddleware"
    }
  ],

 "require": {
   "aaronsaray/SlimPHPMiddleware": "dev-master"
 }
```

## Usage Instructions

```PHP
$app = new \Slim\Slim();
$compressMiddleware = new \AaronSaray\SlimPHPMiddleware\Compress();
$app->add($compressMiddleware);
```