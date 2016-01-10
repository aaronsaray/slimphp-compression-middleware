# SlimPHP Compression Middleware

Need to add gzip compression to your output but don't have access to the server configuration?  This is a middleware for [SlimPHP Framework](http://www.slimframework.com/) to use HTTP+gzip compression.

**Please note: If you CAN add this functionality to your server config, please do that instead.**

## Installation Instructions

Install the latest version with

```bash
$ composer require aaronsaray/php-flow-control
```

## Usage Instructions

```PHP
$app = new \Slim\Slim();
$compressMiddleware = new \AaronSaray\SlimPHPMiddleware\Compress();
$app->add($compressMiddleware);
```
