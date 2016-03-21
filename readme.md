## [中文文档阅读](#)

## Description

[Intervention/image](https://github.com/Intervention/image) is a PHP image handling and manipulation library providing an easier and expressive way to create, edit, and compose images. The package includes ServiceProviders and Facades for easy Laravel integration.

> This project was created by [The EST Group](http://est-group.org/) and [PHPHub](https://phphub.org/).

Welcome to follow `LaravelTips` on wechat, this account will focus on the services to serve the laravel developers, we try to help those developers to learning the laravel framework better and faster.

![](http://ww4.sinaimg.cn/large/76dc7f1bjw1f23moqj4qzj20by0bywfa.jpg)

## Installation

This project written in [Laravel5](https://laravel.com/docs/5.2), and using homestead as local development environment. Before read this document, make sure you already install homestead in your local machine.

### 1. Download the source code

    https://github.com/zhengjinghua/est-image-demo.git

### 2. Setup homestead

Open `Homestead.yaml` by this command:

    homestead edit

Modify it like this:

    folders:
        - map: /Users/.../est-image-demo {your project path}
          to: /home/vagrant/est-image-demo

    sites:
        - map: image.app
          to: /home/vagrant/est-image-demo/public

    databases:
        - image

Restart homestead:

    homestead provision

### 3. Install packages

    composer install

### 4. Generate `.env` file

Copy `.env.example` to `.env`

```
cp .env.example .env
```

Because of this project is very simple, so you don't need do any other configuration.

### 5. Modify `hosts` file

Open it by this command:

    sudo vi /etc/hosts

Add this line to file:

    192.168.10.10   image.app

After do that, you can access http://image.app to check the result.
