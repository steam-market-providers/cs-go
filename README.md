# Counter-Strike: Global Offensive provider. Steam market items parser.

### Install
```bash
composer require steam-market-providers/cs-go
```

### How use

```php
SteamParserFactory::create()
    ->setStrategy(new GuzzleStrategy(
        (new HttpOptions())
            ->setProxy('212.82.126.32:80')
            ->setUserAgent('Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.1) Gecko/20061204 Firefox/2.0.0.1')
            ->setTimeout(10)
    ))
    ->setTemplateMethod(new CsGO())
    ->run(1);
```

### Support

For support, email evgeniymykhalichenko@gmail.com or telegram @krep1sh

### License

MIT