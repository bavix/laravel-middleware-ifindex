# laravel-middleware-ifindex

This package solves CEOs problems. 
```
http://example/index.php -> 301, http://example/
http://example/index.php/en -> 301, http://example/en
http://example/index.php/en?query -> 301, http://example/en?query
```

First, require this package in your composer file
```bash
composer require bavix/laravel-middleware-ifindex
```

After updating, add the ServiceProvider to the array of providers in config/app.php
```php
Bavix\Providers\IfIndexProvider::class,
```
