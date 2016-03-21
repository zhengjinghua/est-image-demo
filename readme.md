## [中文文档阅读](#)

## Description

[Intervention/image](https://github.com/Intervention/image) is a PHP image handling and manipulation library providing an easier and expressive way to create, edit, and compose images. The package includes ServiceProviders and Facades for easy Laravel integration.

This project is very simple demo to show you how to use Intervention Image quickly.

> This project was created by [The EST Group](http://est-group.org/) and [PHPHub](https://phphub.org/).

Welcome to follow `LaravelTips` on wechat, this account will focus on the services to serve the laravel developers, we try to help those developers to learning the laravel framework better and faster.

![](http://ww4.sinaimg.cn/large/76dc7f1bjw1f23moqj4qzj20by0bywfa.jpg)

### Table of contents

1. Installation；
* Configuration in Laravel；
* Basic Usage；
* More usages.

## 1. Installation

1). To get started with image, add to your `composer.json` file as a dependency:

```
composer require intervention/image
```

2). Configuration

After installing the image library, register the `Intervention\Image\ImageServiceProvider` in your `config/app.php` configuration file:

```php
'providers' => [
    // ...
    Intervention\Image\ImageServiceProvider::class,
  ],
```

Also, add the Image facade to the aliases array in your app configuration file:

```php
'aliases' => [
    // ...
    'Image' => Intervention\Image\Facades\Image::class,
  ],

```

## 2. Configuration in Laravel

If you're using Laravel, you can pull a configuration file into your application by running the following artisan command.

```
php artisan vendor:publish --provider="Intervention\Image\ImageServiceProviderLaravel5"
```

In Laravel 5 applications the configuration file is copied to `config/image.php`, With this copy you can alter the image driver settings for you application locally and define which library should be used by all commands:

```
return array(
    'driver' => 'imagick'
);
```

Currently you can choose between `gd` and `imagick` support.

That's it! :beers::beers::beers:

## 3. Basic Usage

```
// open an image file and resize it
$img = Image::make('images/avatar.jpg')->resize(200, 200);

// resize image instance
$img->resize(320, 240);

// insert a watermark at special position
$img->insert('images/watermark.png', 'bottom-right', 15, 10);

// save image in desired format
$img->save('images/new_avatar.jpg');

// also you can do that like this
$img = Image::make('images/avatar.jpg')->resize(200, 200)->insert('images/new_avatar.jpg', 'bottom-right', 15, 10);
```

## 4. More usages

* Image Uploads;
* Image Cache;
* Image Filters;
* URL Manipulation;

You can refer to the [documentation](http://image.intervention.io/getting_started/introduction) to learn more about Intervention Image.
