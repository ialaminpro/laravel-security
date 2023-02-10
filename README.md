# 🔐 Laravel-Security

![Packagist Downloads](https://img.shields.io/packagist/dt/acolyte/laravel-security?style=for-the-badge)
![GitHub repo size](https://img.shields.io/github/repo-size/ialaminpro/laravel-security?style=for-the-badge)
![GitHub](https://img.shields.io/github/license/ialaminpro/laravel-security?style=for-the-badge)

Laravel-Security helps you secure your Laravel apps by setting various HTTP headers. It's not a silver bullet, but it can help!

## Quick start

First, You can install the package via composer: 
```sh
composer require acolyte/laravel-security 
```

If you would like to assign middleware to specific routes, you should first assign the middleware a key in your `app/Http/Kernel.php` file. By default, the `$routeMiddleware` property of this class contains entries for the middleware included with Laravel

```php
// Within App\Http\Kernel Class...

protected $routeMiddleware = [
    'auth' => \App\Http\Middleware\Authenticate::class,
    'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
    'bindings' => \Illuminate\Routing\Middleware\SubstituteBindings::class,
    'cache.headers' => \Illuminate\Http\Middleware\SetCacheHeaders::class,
    'can' => \Illuminate\Auth\Middleware\Authorize::class,
    'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
    'signed' => \Illuminate\Routing\Middleware\ValidateSignature::class,
    'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
    'verified' => \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class,
    'no-cache' => \Acolyte\LaravelSecurity\Middleware\CacheMiddleware::class
];
```

## Documentation

For installation instructions, in-depth usage and deployment details, please take a look at the official [documentation](https://getspooky.github.io/Laravel-Acolyte/).

## Requirements

Laravel-Security has a few requirements you should be aware of before installing :

* Composer
* Laravel Framework 5.4+

## Solved : Security vulnerability

Laravel-Security is a collection of 9 smaller middleware functions that set HTTP response headers.

| Vulnerability | Middleware Class                                                |   Included
| ------- |-----------------------------------------------------------------| --- |
| Cache Control Attack | Acolyte\LaravelSecurity\Middleware\CacheMiddleware::class       |  ✔
| Cross-Origin Resource Sharing (CORS) | Acolyte\LaravelSecurity\Middleware\CorsMiddleware::class        |✔
| X-Permitted-Cross-Domain-Policies | Acolyte\LaravelSecurity\Middleware\CrossDomainMiddleware::class | ✔
| DNS Prefetch Control |  Acolyte\LaravelSecurity\Middleware\DnsMiddleware::class        |✔
| Click Jacking Attack | Acolyte\LaravelSecurity\Middleware\FrameGuardMiddleware::class  |✔
| Strict-Transport-Security |  Acolyte\LaravelSecurity\Middleware\HstsMiddleware::class       |✔
| Mime Sniffing Attack | Acolyte\LaravelSecurity\Middleware\NoSniffMiddleware::class     |✔
| X-Powered-By Attack  | Acolyte\LaravelSecurity\Middleware\XPoweredByMiddleware::class  | ✔
| XSS Attack |  Acolyte\LaravelSecurity\Middleware\XssMiddleware::class        |✔


## Contributing 

Whether you're helping us fix bugs, improve the docs, or spread the word, we'd love to have you as part of the `Laravel-Security` community! 💪💜  See CONTRIBUTING.md for more information on what we're looking for and how to get started.

## License

The Laravel-Security package is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
