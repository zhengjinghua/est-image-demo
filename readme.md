
## for Chinese

* [中文文档亲点击这里](#)

## The Demo

Demo is the Source code of this project, is a simple image editing example.

### Screenshots

![](http://ww3.sinaimg.cn/large/76dc7f1bjw1f26mc87s86j20rh14ytc3.jpg)

### Run the demo

You can refer to this [documentation](https://github.com/Aufree/laravel-packages-top100/blob/master/how-to-run-a-laravel-project.md) to know how to run this demo.

## The Tutorial

[Intervention/image](https://github.com/Intervention/image) is a PHP image handling and manipulation library providing an easier and expressive way to create, edit, and compose images. The package includes ServiceProviders and Facades for easy Laravel integration.

This project is very simple demo to show you how to use Intervention Image quickly.

> This project was created by [The EST Group](http://est-group.org/) and [PHPHub](https://phphub.org/).

### Table of contents

1. Installation；
* Configuration；
* Basic Usage；
* More usages.

## 1. Installation

1). To get started with image, add to your `composer.json` file as a dependency:

```
composer require intervention/image
```

2). Integration in Laravel

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

## 2. Configuration

Currently Intervention Image supports two Image processing extensions.

* GD
* Imagick

Make sure you have one of these installed in your PHP environment, before you start.

You're able to configure Intervention Image to use one of these libraries for all its operations. Just pass the configuration as an array directly into the ImageManager.

Example

```php
// include composer autoload
require 'vendor/autoload.php';

// import the Intervention Image Manager Class
use Intervention\Image\ImageManager;

// create an image manager instance with favored driver
$manager = new ImageManager(array('driver' => 'imagick'));

// to finally create image instances
$image = $manager->make('public/foo.jpg')->resize(300, 200);
You might also use the static version of ImageManager as shown in the example below.
```

Static Example

```php
// include composer autoload
require 'vendor/autoload.php';

// import the Intervention Image Manager Class
use Intervention\Image\ImageManagerStatic as Image;

// configure with favored image driver (gd by default)
Image::configure(array('driver' => 'imagick'));

// and you are ready to go ...
$image = Image::make('public/foo.jpg')->resize(300, 200);
```

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

That's it! :beers: :beers: :beers:

## 4. More usage

* Image Uploads;
* Image Cache;
* Image Filters;
* URL Manipulation;

You can refer to the [documentation](http://image.intervention.io/getting_started/introduction) to learn more about Intervention Image.

---

欢迎关注 `LaravelTips`, 这是一个专注于为 Laravel 开发者服务, 致力于帮助开发者更好的掌握 Laravel 框架, 提升开发效率的微信公众号.

![](http://ww4.sinaimg.cn/large/76dc7f1bjw1f23moqj4qzj20by0bywfa.jpg)



